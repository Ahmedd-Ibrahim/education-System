<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\Classes;
use App\models\Phase;
use App\models\PhaseYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ClassesController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:store class|edit class|update class|delete class|show class']);
    }

    public function index()
    {
        $classes = Classes::paginate(40);
        return view('dashboard.class.index',compact('classes'));
    }// End of Index

    public function create(Request $request)
    {
        $phases = Phase::paginate(40);
        if($request->ajax()){
            $id =  $request->name;
            $phase = Phase::findOrFail($id);
            $years = $phase->PhaseYear;
            return $years;
        }
        return view('dashboard.class.add',compact('phases'));
    } // End of Create

    public function store(Request $request)
    {
        $valid = Validator::make($request->all(),[
           'name' => 'required',
           'container' => 'required',
           'phase' => 'required',
           'phaseYear' => 'required',
        ]);
        if($valid->fails()){
            return redirect()->back()->with('error','You miss some Inputs');
        } // End of if condition
        $phaseYear = PhaseYear::find($request->phaseYear);
        $recored = new Classes($request->except(['phase','phaseYear','_token']));
         $phaseYear->Classes()->save($recored);
      return redirect()->route('admin.class.index')->with('success','Success to Add new class');
    } // End of store

    public function show(Classes $classes)
    {
        //
    } // End of show

    public function edit($id)
    {
        $class = Classes::findOrFail($id);
        $phases = Phase::paginate(40);
        return view('dashboard.class.edit',compact('class','phases'));
    } // End of edit


    public function update(Request $request,  $id)
    {

        $valid = Validator::make($request->all(),[
            'name' => 'required',
            'container' => 'required',
            'phase' => 'required',
            'phaseYear' => 'required',
        ]);
        if($valid->fails()){
            return redirect()->back()->with('error','You miss some Inputs');
        } // End of if condition
        $class = Classes::findOrFail($id);
         $class->update($request->all());
        return redirect()->route('admin.class.index')->with('success','Updated Successfully');
    } // End of update

    public function destroy( $id)
    {
        $class = Classes::findOrFail($id);
        if (isset($class->Students) && count($class->Students) > 0)
        {
            return redirect()->back()->with('error','This class has Students can not delete untill move this students to another class');
        }
        $class->delete();
        return redirect()->back()->with('success','deleted Successfully');
    } // End of destroy
}
