<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\FoodCycle;
use App\models\HealthReport;
use App\models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FoodCycleController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:show food'])->only(['index']);
        $this->middleware(['permission:store food'])->only(['create','store']);
        $this->middleware(['permission:update food'])->only(['update','edit']);
        $this->middleware(['permission:delete food'])->only(['destroy']);
    }
    
    public function index()
    {
        $foodCycles = FoodCycle::paginate(50);
        return view('dashboard.food_cycle.index',compact('foodCycles'));
    } // End of Index

    public function create()
    {
        $students = Student::all();
        return view('dashboard.food_cycle.add',compact('students'));
    } // End of create


    public function store(Request $request)
    {

        $vaildation = Validator::make($request->all(),
        [
           'title' => 'required',
           'image' => 'mimes:jpeg,png,jpg',
           'student_id' => 'required',
        ]);

        if ($vaildation->fails()){
            return redirect()->back()->with('error','Something wrong from vaildation');
        }
        $student = Student::findOrFail($request->student_id);
        $request->hasFile('image') ?  $path  = UploadImage('food_cycle',$request->image) : $path = '';
        $data = $request->except(['_token','image']);
        $data['image'] = $path;
        $foodCycle = new FoodCycle($data);
        $foodCycle->Student()->associate($student);
        $foodCycle->save();
        return redirect()->route('admin.food-cycle.index')->with('success','Your record added');
    } // End of store


    public function show(FoodCycle $foodCycle)
    {
        return view('dashboard.food_cycle.show',compact('foodCycle'));

    } // End of show


    public function edit(FoodCycle $foodCycle)
    {
        $students = Student::all();

        return view('dashboard.food_cycle.edit',compact('foodCycle','students'));
    } // End of Edit
    public function update(Request $request, FoodCycle $foodCycle)
    {
        $vaildation = Validator::make($request->all(),
            [
                'title' => 'required',
                'image' => 'required',
                'student_id' => 'required',
            ]);
        if ($vaildation->fails()){
            return redirect()->back()->with('error','Something wrong');
        }
        $request->hasFile('image') ?  $path  = UploadImage('food_cycle',$request->image) : $path = '';
        $data = $request->except(['_token','image']);
        $data['image'] = $path;
        $foodCycle->update($data);
        return redirect()->route('admin.food-cycle.index')->with('success','Your record added');
    } // Ednd of Update


    public function destroy(FoodCycle $foodCycle)
    {
        $foodCycle->delete();
        return redirect()->back()->with('success','The record deleted Successfully');
    }
}
