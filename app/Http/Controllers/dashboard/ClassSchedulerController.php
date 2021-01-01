<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\Classes;
use App\models\ClassScheduler;
use App\models\Day;
use App\models\Group;
use App\models\Phase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassSchedulerController extends Controller
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
        $schedulers = ClassScheduler::paginate(100);


        return view('dashboard.class_scheduler.index',compact('schedulers'));
    } // End of Index

    public function create()
    {

        $phases = Phase::all();
        return view('dashboard.class_scheduler.add',compact('phases'));
    }// End of create

    public function show($id)
    {
        $course = ClassScheduler::findOrFail($id);
       return view('dashboard.class_scheduler.show',compact('course'));
    } // End of show

    public function store(Request $request)
    {
        $vaild = Validator::make($request->all(),[
            'name' => 'required',
            'phase' => 'required'
        ]);
        if($vaild->fails())
        {
            return redirect()->back()->with('error','fill all inputs');
        }
        $phase  = Phase::findOrfail($request->phase);
        $scheduler =   $phase->PhaseScheduler()->save(new ClassScheduler($request->all()));  // new scheduler off class to db


        return redirect()->route('admin.study-schedule.create',$scheduler);
    } // End of store

    public function edit($id)
    {
        $scheduler = ClassScheduler::findOrFail($id);
        return view('dashboard.class_scheduler.edit',compact('scheduler'));
    } // End of edit
    public function update(Request $request, $id)
    {
        $scheduler = ClassScheduler::findOrFail($id);
        $scheduler->update($request->all());
        return redirect()->route('admin.class-schedule.index')->with('success','Updated');
    } // End of update


    public function destroy($id)
    {
        $scheduler = ClassScheduler::findOrFail($id);
        if(isset($scheduler->Days) && count($scheduler->Days) > 0)
        {
            $ids = [];
            foreach ($scheduler->Days as $day)
            {
                $ids[] = $day->id;
            }
            Day::destroy($ids);
            $scheduler->delete();
            return redirect()->back()->with('success','Deleted');
        }

        $scheduler->delete();
        return redirect()->back()->with('success','Deleted');
    } // End of destroy

    public function active($id)
    {
        $schedule = ClassScheduler::findOrFail($id);
        $allSchedule = ClassScheduler::where('id','!=',$id)->get();

        foreach ($allSchedule as $table)
        {
            $active = $table->active;
            if($active != 'false')
            {
                $table->update(['active'=>'false']);
            }
        }
        $schedule->update(['active' => 'true']);
        return redirect()->back()->with('success','Activation Switched');
    } // end of Active
}
