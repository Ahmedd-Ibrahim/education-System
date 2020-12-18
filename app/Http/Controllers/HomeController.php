<?php

namespace App\Http\Controllers;


use App\models\ClassScheduler;
use App\models\Student;
use App\models\SubjectScheduler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $sales_data = Student::select(
            DB::raw('MONTH(created_at) AS month'),
            DB::raw('YEAR(created_at) AS year'),
            DB::raw('COUNT(*) AS counter')
        )->groupBy('month')->get();

        $courses = SubjectScheduler::with('day')->paginate(4);
        $phaseCourses = ClassScheduler::with('days')->where('active','true')->first();
        return view('dashboard.index',compact('courses','phaseCourses','sales_data'));
    }
}
