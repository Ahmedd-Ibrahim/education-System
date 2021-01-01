<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\update\UserUpdateRequst;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index(UsersDataTable $table)
    {
        return $table->render('dashboard.user.table');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('dashboard.user.create',compact('roles'));
    } // End of create

    public function store(UserRequest $request)
    {
         $pass = bcrypt($request['password']);
         $request['password'] = $pass;
         $user = User::create($request->except(['role']));
         $user->syncRoles($request['role']);
         return redirect()->route('admin.users.index')->with('success','User added successfully');

    } // End of store

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

    public function edit($id)
    {

         $user = User::findOrFail($id);
         $roles = Role::all();
        return view('dashboard.user.edit',compact('user','roles'));
    } // End of edit

    public function update(UserUpdateRequst $request, $id)
    {
        $user = User::findOrFail($id);
        $pass = bcrypt($request['password']);
        $request['password'] = $pass;
        $user->update($request->except(['role']));
        $user->syncRoles($request['role']);
        return redirect()->route('admin.users.index')->with('success','updated successfully');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users.index')->with('success','the user deleted successfully');
    }
}
