<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\ClassScheduler;
use App\models\Student;
use App\models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentRegisterController extends Controller
{


    public function __construct()
    {
        $this->middleware(['permission:store student|edit student|update student|delete student|show student']);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::whereDoesntHave('SubjectMiniGroups')->get();
        $subjects = Subject::paginate(40);
        return view('dashboard.student_register.add',compact('students','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'subject_mini_group_id' => 'required',
                'student_id' => 'required'
            ]
        );

        if($validator->fails())
        {
            return redirect()->route('admin.student-register.create')->with('error','Please check Form information');
        }

        $student = Student::findOrFail($request->student_id);


        if(isset($request->subject_mini_group_id))
        {
            $array =  $request->subject_mini_group_id;
            $filter = array_filter($array);
            $student->SubjectMiniGroups()->attach($filter);
        }
        return redirect()->back()->with('success','Your Request Recorded');

    }// End of store

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::with('SubjectMiniGroups')->find($id);
        $subjects = Subject::all();
        $course = ClassScheduler::where('active',true)->first();
        $miniGroupIds = [];
        if(isset($student->SubjectMiniGroups))
        {
           foreach ($student->SubjectMiniGroups as $miniGroup)
           {
               $miniGroupIds[] = $miniGroup['id'];
           }

        }

        return view('dashboard.student_register.edit',compact('student','subjects','course','miniGroupIds'));
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

       $student = Student::findOrFail($id);

        if(isset($request->subject_mini_group_id))
        {
            $array =  $request->subject_mini_group_id;
            $filter = array_filter($array);
            $student->SubjectMiniGroups()->sync($filter);
        }

        return redirect()->back()->with('success','Your Request Recorded');


    } // End of update

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
