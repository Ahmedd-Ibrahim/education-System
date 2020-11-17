<?php

namespace App\Http\Controllers\dashboard\settings;

use App\Http\Controllers\Controller;
use App\models\MangerAccountSetting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class MangerAccountSettingController extends Controller
{

    public function index()
    {

        $user = Auth::user();

        return view('dashboard.basicsInfo.mangerSettings',compact('user'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    public function show(MangerAccountSetting $mangerAccountSetting)
    {
        //
    }


    public function edit(MangerAccountSetting $mangerAccountSetting)
    {
        //
    }

    public function update(Request $request,  $id)
    {
       $user = User::find($id);
       if(!$user){
           return redirect()->back()->with('error','this User Not found');
       }
       $validator = Validator::make($request->all(),
           [
               'name' => 'required',
               'email' => 'required',
               'password'=> 'required'
           ]);

       if ($validator->fails()){
           return redirect()->back()->with('error', 'fill the inputs');
       }

        $user->update([
           'name' => $request->name,
           'email' => $request->email,
           'password' => Hash::make($request->password)
        ]);
       return redirect()->back()->with('success','Your Information updated');
    }


    public function destroy(MangerAccountSetting $mangerAccountSetting)
    {
        //
    }
}
