<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\Classes;
use App\models\ClassScheduler;
use App\models\Day;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassSchedulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedulers = ClassScheduler::paginate(100);
        return view('dashboard.class_scheduler.index',compact('schedulers'));
    }

    public function create()
    {
        $classes = Classes::all();
        return view('dashboard.class_scheduler.add',compact('classes'));
    }
    public function show($id)
    {
        $course = ClassScheduler::findOrFail($id);
       return view('dashboard.class_scheduler.show',compact('course'));
    }

    public function store(Request $request)
    {
        $vaild = Validator::make($request->all(),[
            'name' => 'required',
            'class_id' => 'required'
        ]);
        if($vaild->fails()){
            return redirect()->back()->with('error','fill all inputs');
        }
        $class = Classes::findOrfail($request->class_id);
        $classScheduler = new ClassScheduler($request->all());
        $scheduler =   $class->ClassSchedulers()->save($classScheduler);  // new scheduler off class to db

        return redirect()->route('admin.study-schedule.create',$scheduler);
    }

    public function edit($id)
    {
        $scheduler = ClassScheduler::findOrFail($id);
        $classes = Classes::all();
        return view('dashboard.class_scheduler.edit',compact('scheduler','classes'));
    } // End of edit


    public function update(Request $request, $id)
    {
        $scheduler = ClassScheduler::findOrFail($id);
        $scheduler->update($request->all());
        return redirect()->route('admin.class-schedule.index')->with('success','Updated');
    }


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
    }
}
