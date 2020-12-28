<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\StudentsDataTables;
use App\Http\Controllers\Controller;
use App\models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentsTableController extends Controller
{


    public function __construct()
    {
        $this->middleware(['permission:store student|edit student|update student|delete student|show student']);
    }

    public function index(StudentsDataTables $dataTable)
    {
         $student_class = Student::with('class:id,name');

       return $dataTable->render('dashboard.student.table',[$student_class]);
    }

    public function getRelationshipsData()
    {
        $student_class = Student::with('class:id,name');

        return StudentsDataTables::of($student_class)
            ->editColumn('title', '{!! str_limit($title, 60) !!}')
            ->make(true);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
