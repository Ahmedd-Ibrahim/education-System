<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\Group;
use App\models\Phase;
use App\models\Subject;
use App\models\SubjectMiniGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectMiniGroupController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:store subject|edit subject|update subject|delete subject|show subject']);
    }

    public function index()
    {
        $groups = SubjectMiniGroup::with('subject')->paginate(50);

        return view('dashboard.subject_mini_group.index',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $subjects = Subject::all();
        return view('dashboard.subject_mini_group.add',compact('subjects'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vaildator = Validator::make($request->all(),[
           'subject' => 'required',
            'name' => 'required'
        ]);

        if($vaildator->fails())
        {
            return redirect()->back()->with('error', 'Something missed please fill inputs');
        }

        $subject = Subject::find($request->subject);

        $subject->SubjectMiniGroup()->save(new SubjectMiniGroup($request->all()));

         return redirect()->route('admin.subject-mini-group.index')->with('success', 'The group added Successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $miniGroup = SubjectMiniGroup::find($id);

        return view('dashboard.subject_mini_group.edit',compact('miniGroup'));
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

        $vaildator = Validator::make($request->all(),[
            'name' => 'required'
        ]);

        if($vaildator->fails())
        {
            return redirect()->back()->with('error', 'Something missed please fill inputs');
        }

        $miniGroup = SubjectMiniGroup::find($id);

        $miniGroup->update($request->all());

        return redirect()->route('admin.subject-mini-group.index')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $miniGroup = SubjectMiniGroup::findOrFail($id);

        $miniGroup->delete();

        return redirect()->back()->with('success','Deleted Successfully');


    }
}
