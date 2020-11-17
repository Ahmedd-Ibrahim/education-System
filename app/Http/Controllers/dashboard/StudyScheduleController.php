<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\Classes;
use App\models\ClassScheduler;
use App\models\Day;
use App\models\Subject;
use App\models\SubjectScheduler;
use App\models\Teacher;
use Illuminate\Http\Request;

class StudyScheduleController extends Controller
{

    public function index()
    {
        return 'index';
    } // End of index

    public function create($scheduler_id)
    {
        $subjects = Subject::all();
        $teachers = Teacher::all();
        $scheduler = ClassScheduler::findOrFail($scheduler_id);
        return view('dashboard.study_schedule.add',compact('scheduler','subjects','teachers'));
    } // End of create

    public function store(Request $request)
    {


        $scheduler = ClassScheduler::findOrFail($request->scheduler_id);

        $dayData = new Day($request->all());
       $day = $scheduler->Days()->save($dayData);

            $subjectsData = [];

            foreach ($request->saturday as $subjects){
                $subjectsData[] = new SubjectScheduler($subjects);
            }

            $day->SubjectSchedulers()->saveMany($subjectsData);

        return redirect()->back()->with('success','subject time added ');



    } // End of store


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'under work';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
