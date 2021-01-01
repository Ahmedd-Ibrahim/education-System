<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudyScheduleRequest;
use App\models\Classes;
use App\models\ClassScheduler;
use App\models\Day;
use App\models\PhaseYear;
use App\models\Subject;
use App\models\SubjectScheduler;
use App\models\Teacher;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StudyScheduleController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:show scheduler'])->only(['index']);
        $this->middleware(['permission:store scheduler'])->only(['create','store']);
        $this->middleware(['permission:update scheduler'])->only(['update','edit']);
        $this->middleware(['permission:delete scheduler'])->only(['destroy']);
    }


    public function index()
    {
        return 'index';
    } // End of index

    public function create($scheduler_id,Request $request)
    {

        $days = [
            "saturday",
            "sunday",
            "monday",
            "tuesday",
            "wednesday",
            "thursday",
        ];

        $subjects = Subject::all();
        $teachers = Teacher::all();
        $classes = Classes::all();
        $scheduler = ClassScheduler::findOrFail($scheduler_id);
        $years = $scheduler->Phase->PhaseYear;
        if($request->ajax())
        {

            if(isset($request->year))
            {
                $year = PhaseYear::find($request->year);
                $groups = $year->Groups;
                return $groups;
            }
            if (isset($request->name))
            {
                $subject = Subject::find($request->name);
                $miniGroups = $subject->SubjectMiniGroup;
                 return $miniGroups;
            }
        }
        if(count($days) == Count($scheduler->Days))
        {

            return redirect()->route('admin.class-schedule.show',$scheduler)->with('error','This table have all week day try another method');
        }
        return view('dashboard.study_schedule.add',compact('scheduler','subjects','teachers','classes','years','days'));
    } // End of create

    public function store(StudyScheduleRequest $request)
    {

        try {
            DB::beginTransaction();
            $scheduler = ClassScheduler::findOrFail($request->scheduler_id);
            $dayData = new Day($request->all());
            $day = $scheduler->Days()->save($dayData);
            $subjectsData = [];
            foreach ($request->saturday as $subjects)
            {
                $subjects['day_id'] = $day->id; // append day id to scheduler table
                $subjectsData[] = new SubjectScheduler($subjects);
            }
            $day->SubjectSchedulers()->saveMany($subjectsData);

            if(isset($scheduler->Days))
            {
                if(count($scheduler->Days) >= 6)
                {
                    return redirect()->route('admin.class-schedule.show',$scheduler)->with('success','Your Table Done!');
                }
            }
            DB::commit();
            return redirect()->back()->with('success','subject time added ');
        } catch (\Exception $ex)
        {
            DB::rollBack();
            return redirect()->back()->with('error','Something wrong!');
        }


    } // End of store


    public function show($id)
    {
        //
    } // End of show

    public function edit($id,Request $request)
    {
       $day = Day::with('SubjectSchedulers')->findOrFail($id);
       $subjects = Subject::all();
       $scheduler = ClassScheduler::find($day->phase_scheduler_id);
       $phase = $scheduler->Phase;
       $years = $phase->PhaseYear;
       $teachers = Teacher::all();
       $classes = Classes::all();

        if($request->ajax())
        {
            if(isset($request->year))
            {
                $year = PhaseYear::find($request->year);
                $groups = $year->Groups;
                return $groups;
            }
            if (isset($request->name))
            {
                $subject = Subject::find($request->name);
                $miniGroups = $subject->SubjectMiniGroup;
                return $miniGroups;
            }
        }
       return view('dashboard.study_schedule.edit',compact('day','subjects','years','teachers','classes'));
    }

    public function update(StudyScheduleRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $day = Day::findOrFail($id);
           $scheduler = ClassScheduler::find($day->phase_scheduler_id);
            $subjectsIds = [];
            $subjectsData = [];
            foreach ($request->saturday as $subject)
            {
                if(! isset($subject['id']))  // if new records insert it
                {
                    $subject['day_id'] = $day->id; // append day id to scheduler table
                        $newData[] = new SubjectScheduler($subject);
                    $day->SubjectSchedulers()->saveMany($newData);
                }

                if(isset($subject['id'])) // if exists records update it
                {
                    $subject['day_id'] = $day->id;
                    $subjectsIds [] = $subject['id'];
                    $data = collect($subject);
                    $subjectsData [] = $data->except('id');
                    $record = $data->toArray();
                    $model =  SubjectScheduler::where('id',$subject['id'])->update($record);
                }

            } // End of loop
            DB::commit();
            return redirect()->route('admin.class-schedule.show',$scheduler)->with('success','updated Successfully');
        }catch (\Exception $x)
        {
            DB::rollBack();

            return redirect()->back()->with('error','not Completed');
        }
    } // End of update

    public function destroy($id)
    {
        $day = Day::findOrFail($id);
        $day->delete();
        return redirect()->back()->with('success','the Day Deleted Successfully');
    } // End of destroy

    public function delete($id)
    {
        $subject = SubjectScheduler::findOrFail($id);
        $subject->delete();
        return redirect()->back()->with('success','This subject Scheduler deleted Successfully');
    } // End of delete
}
