<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubjectRequest;
use App\models\Subject;
use App\models\SubjectMiniGroup;
use App\models\Teacher;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:store subject|edit subject|update subject|delete subject|show subject']);
    }

    public function index()
    {
        $subjects = Subject::paginate(40);
        return view('dashboard.subject.index',compact('subjects'));
    } // End of index


    public function create()
    {
        return view('dashboard.subject.add');
    } // End of create

    public function store(SubjectRequest $request)
    {


        $subject = Subject::create($request->all());

        $group = new SubjectMiniGroup(['name' => $request->group]);

        $subject->SubjectMiniGroup()->save($group);

        return redirect()->route('admin.subject.index')->with('success','Your Subject Added');

    } // End of store


    public function show(Subject $subject)
    {
        //
    } // End of show

    public function edit(Subject $subject)
    {
        return view('dashboard.subject.edit',compact('subject'));
    } // End of edit


    public function update(SubjectRequest $request, Subject $subject)
    {

        $subject->update($request->all());
        return redirect()->route('admin.subject.index')->with('success','Your subject Updated');
    } // End of update

    public function destroy(Subject $subject)
    {

        if(!$subject){
            return redirect()->back()->with('error','This subject Not found');
        }
         $subject->delete();
        return redirect()->back()->with('success','Your Subject Deleted');
    } // End of destroy
}
