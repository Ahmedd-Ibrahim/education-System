<?php

namespace App\Http\Controllers\dashboard\roles;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersmissionRequest;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['permission:show settings'])->only(['index']);
        $this->middleware(['permission:store settings'])->only(['create','store']);
        $this->middleware(['permission:update settings'])->only(['update','edit','active']);
        $this->middleware(['permission:delete settings'])->only(['destroy']);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings   = Permission::where('name','like','%settings%')->get();
        $configs    = Permission::where('name','like','%config%')->get();
        $class      = Permission::where('name','like','%class%')->get();
        $profs      = Permission::where('name','like','%prof%')->get();
        $student    = Permission::where('name','like','%student%')->get();
        $subjects   = Permission::where('name','like','%subject%')->get();
        $healths    = Permission::where('name','like','%health%')->get();
        $foods      = Permission::where('name','like','%food%')->get();
        $schedulers = Permission::where('name','like','%scheduler%')->get();
        $students = Permission::where('name','like','%student%')->get();
        $website = Permission::where('name','like','%website%')->get();
        $roles = Role::all();
        return view('dashboard.permission.add',compact('settings','configs','class','profs','student',
        'subjects','healths','foods','schedulers','students','roles','website'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersmissionRequest $request)
    {
        $role = Role::findById($request->role);

        $role->syncPermissions($request->permission);

        return redirect()->route('home')->with('success','The permissions assigns to this role successfully');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
