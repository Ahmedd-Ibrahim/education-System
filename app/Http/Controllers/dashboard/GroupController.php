<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\models\Group;
use App\models\Phase;
use App\models\PhaseYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GroupController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:store config|edit config|update config|delete config']);
    }

    public function index()
    {
        $groups = Group::paginate(50);
        return view('dashboard.group.index',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $phaseYears = PhaseYear::all();

        if($request->ajax()){
            if($request->has('name'))
            {
                $id =  $request->name;
                $phase = Phase::with('PhaseYear')->find($id);
                return  $phase->PhaseYear;
            }
        }

        $phases = Phase::all();
        return view('dashboard.group.add',compact('phases'));
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

            'name' => 'required',
            'phase' => 'required',
            'year' => 'required',
            'student_counter' => 'required'
        ]);
        if($vaildator->fails())
        {
            return redirect()->back()->with('error', 'You missed Something');
        }

        $year = PhaseYear::findOrFail($request->year);

        $year->Groups()->save(new Group($request->except(['phase','_token'])));

        return redirect()->route('admin.group.index')->with('success','Group Added Successfully');
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
        $group = Group::findOrFail($id);

        return view('dashboard.group.edit',compact('group'));
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

            'name' => 'required',
            'student_counter' => 'required'
        ]);
        if($vaildator->fails())
        {
            return redirect()->back()->with('error', 'You missed Something');
        }
        $group = Group::findOrFail($id);
        $group->update($request->all());
        return redirect()->route('admin.group.index')->with('success', 'Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();
        return redirect()->back()->with('success','Deleted Successfully');
    }
}
