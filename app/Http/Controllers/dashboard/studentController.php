<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\Classes;
use App\models\Phase;
use App\models\PhaseYear;
use App\models\Student;

use App\models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class studentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(40);
        return view('dashboard.student.index',compact('students'));
    } // End of index

    public function create(Request $request)
    {
        $phases = Phase::paginate(40);
        $subjects = Subject::paginate(40);
        if($request->ajax()){
            if($request->has('name'))
            {
                $id =  $request->name;
                $phase = Phase::findOrFail($id);
                $years = $phase->PhaseYear;
                return $years;
            }

            if ($request->has('className'))
            {
                $phaseYear = PhaseYear::findOrFail($request->className);
                return $phaseYear->Classes;
            }

        }
        return view('dashboard.student.add',compact('phases','subjects'));
    } // End of create

    public function store(Request $request)
    {
        try{

            $validator = Validator::make($request->all(),
                [
                    'name'   => 'required| max:100 | min:3',
                    'gender' => 'required| in:male,female',
                    'bdate' => 'required',
                    'avatar' => 'mimes:jpeg,png,jpg',
                    'phone' => 'required',
                    'address' => 'required',
                    'class_id' => 'required'
                ]
            );
            if($validator->fails()){
                return redirect()->route('admin.student.create')->with('error','Please check Form information');
            }

            $class = Classes::findOrFail($request->class_id);
            $request->hasFile('avatar') ?  $path  = UploadImage('students',$request->avatar) : $path = '';
            $data = $request->except(['_token','avatar','phase','phaseYear']);
            $data['avatar'] = $path;
            $record = new Student($data);
            $student =    $class->Students()->save($record);
            if(isset($request->subjects)){
                $student->Subjects()->attach($request->subjects);
            }

            return redirect()->route('admin.student.index')->with('success','Your Request Recorded');
        } catch (\ Exception $ex){
           return $ex->getMessage();
//            return redirect()->route('admin.student.create')->with('error','Please check Form information');
        }

    } // End of store

    public function show(Student $student)
    {

        return view('dashboard.student.show',compact('student'));
    }

    public function edit(Student $student)
    {
        $class = $student->Class; // student Class
        $year =  $class->PhaseYear; // Student year
        $ownPhase =  $year->Phase;   // Student Education Phase
        $subjects = Subject::all();
        $ownSubjects = $student->Subjects;
        /* Get student Subjects id in array*/
        $ownSubjectsIds = [];
        foreach ($ownSubjects as $ownSubject){
            $ownSubjectsIds[] = $ownSubject->id;
        }
        $phases = Phase::paginate(40);
        return view('dashboard.student.edit',compact('student','phases','class','year','ownPhase','subjects','ownSubjectsIds'));
    }

    public function update(Request $request,  $id )
    {
        try {
            $validator = Validator::make($request->all(),
                [
                    'name'   => 'required| max:100|min:3',
                    'gender' => 'required| in:male,female',
                    'bdate' =>  'required',
                    'phaseYear'   => 'required',
                    'avatar' => 'mimes:jpeg,png,jpg',
                    'class_id' => 'required'
                ]
            );
            if ($validator->fails()){
                return redirect()->back()->with('error','Something Wrong');
            }

            $student = Student::findOrFail($id);
            $request->hasFile('avatar') ?  $path  = UploadImage('students',$request->avatar) : $path = $student->avatar;
            $data = $request->except(['_token','avatar','phaseYear','phase','subjects']);
            $data['avatar'] = $path;
            $student->update($data);
            if ($request->subjects){
                $student->Subjects()->sync($request->subjects);
            }
            return redirect()->route('admin.student.index')->with('success','Your Request Updated');
        } catch (\ Exception $ex){
            return $ex->getMessage();
        }

    } // End of update

    public function destroy(Student $student)
    {
        if(!$student){
            return redirect()-back()->with('error','this student does not Exist');
        }
        $student->delete();
        return redirect()->back()->with('success','Student Deleted successflly');
    }
}
