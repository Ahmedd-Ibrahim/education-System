<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\HealthReport;
use App\models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HealthReportController extends Controller
{

    public function index()
    {
        $health_reports = HealthReport::paginate(50);
        return view('dashboard.health_report.index',compact('health_reports'));
    } // End of Index

    public function create()
    {
        $students = Student::all();
        return view('dashboard.health_report.add',compact('students'));
    } // End of create


    public function store(Request $request)
    {
        $vaildation = Validator::make($request->all(),
            [
                'title' => 'required',
                'report_date' => 'required',
                'content' => 'required',
                'student_id' => 'required',
            ]);
        if($vaildation->fails()){
            return redirect()->back()->with('error','Something wrong');
        }

        $student = Student::FindOrFail($request->student_id);
        $request->hasFile('image') ?  $path  = UploadImage('health_report',$request->image) : $path = '';
        $data = $request->except(['student_id','_token','image']);
        $data['image'] = $path;
        $health_report = new HealthReport($data);
        $student->HealthReports()->save($health_report);
        return redirect()->back()->with('success','Your Record Added');

    } // End of store

    public function show(HealthReport $healthReport)
    {
        return view('dashboard.health_report.show',compact('healthReport'));
    } // End of Show


    public function edit(HealthReport $healthReport)
    {
        $students = Student::all();

        return view('dashboard.health_report.edit',compact('healthReport','students'));
    }

    public function update(Request $request, HealthReport $healthReport)
    {

        $vaildation = Validator::make($request->all(),
            [
                'title' => 'required',
                'report_date' => 'required',
                'content' => 'required',
                'student_id' => 'required',
            ]);
        if($vaildation->fails()){
            return redirect()->back()->with('error','Something wrong');
        }

        $request->hasFile('image') ?  $path  = UploadImage('health_report',$request->image) : $path = '';
        $data = $request->except(['student_id','_token','image']);
        $data['image'] = $path;

        $healthReport->update($data);
        return redirect()->route('admin.health-report.index')->with('success','Your Record Added');
    }

    public function destroy(HealthReport $healthReport)
    {
        $healthReport->delete();
        return redirect()->back()->with('success','Your Record deleted');

    }
}
