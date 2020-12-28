<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\models\Student;
use App\models\Subject;
use App\models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class teacherController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:store prof|edit prof|update prof|delete prof|show prof']);
    }

    public function index()
    {
        $teachers = Teacher::with('Subjects')->paginate(40);
        return view('dashboard.teacher.index',compact('teachers'));
    } // End of index

    public function create()
    {
        $subjects = Subject::paginate(40);
        return view('dashboard.teacher.add',compact('subjects'));
    }

    public function store(Request $request)
    {
        try{
            $valid = Validator::make($request->all(),[
                'name' => 'required',
                'bdate' => 'required',
                'phone' => 'required',
                'gender' => 'required',
                'subject_id' => 'required'
            ]);
            if($valid->fails()){
                return redirect()->back()->with('error','fill all inputs');
            }
            $request->hasFile('avatar') ?  $path  = UploadImage('teacher',$request->avatar) : $path = '';
            $data = $request->except(['_token','avatar']);
            $data['avatar'] = $path;
            $teacher = new Teacher($data);
           $subject = Subject::findOrFail($request->subject_id);
           $subject->Teachers()->save($teacher);

            return redirect()->route('admin.teacher.index')->with('success','Your Request Recorded');
        } catch (\ Exception $ex){
            return $ex->getMessage();
            return redirect()->route('admin.teacher.create')->with('error','Please check Form information unexpected erorr');
        }
    } // End of store

    public function show(Teacher $teacher)
    {
        //
    }
    public function edit(Teacher $teacher)
    {
        $subjects = Subject::all();
        $userSubs = $teacher->Subjects;
        $subID = []; // Subjects Id if Exists
         if(isset($userSubs))
         {
             foreach ($userSubs as $userSub)
             {
                 $subID [] = $userSub->id;
             }
         }

        return view('dashboard.teacher.edit',compact('teacher','subID','subjects'));
    }

    public function update(TeacherRequest $request, Teacher $teacher)
    {
        if(!$teacher){
            return redirect()->back()->with('error','This user not found');
        }
        $path = '';
        if($request->hasFile('avatar'))
        {
            RemoveImage($request->avatar);
            $path = UploadImage('teacher',$request->avatar);
        }

        $data = $request->all();
        $data['avatar'] = $path;
        $teacher->update($data);
        $teacher->Subjects()->sync($request->subjects);
        return redirect()->route('admin.teacher.index')->with('success','User Updated');

    }


    public function destroy(Teacher $teacher)
    {
        //
    }
}
