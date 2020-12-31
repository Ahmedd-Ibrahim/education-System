<?php

namespace App\Http\Controllers\dashboard\settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\ProvideRequest;
use App\models\front\Provide;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provides = Provide::paginate(40);
        return view('website.provider.index',compact('provides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.provider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProvideRequest $request)
    {
        Provide::create($request->all());

        return redirect()->route('admin.front.provide.index')->with('success','added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\front\Provide  $provide
     * @return \Illuminate\Http\Response
     */
    public function show(Provide $provide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\front\Provide  $provide
     * @return \Illuminate\Http\Response
     */
    public function edit(Provide $provide)
    {
        return view('website.provider.edit',compact('provide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\front\Provide  $provide
     * @return \Illuminate\Http\Response
     */
    public function update(ProvideRequest $request, Provide $provide)
    {
        $provide->update($request->all());

        return redirect()->route('admin.front.provide.index')->with('success','Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\front\Provide  $provide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provide $provide)
    {
        if(!$provide)
        {
            return redirect()->back();
        }
        
        $provide->delete();

        return redirect()->back()->with('success','Deleted Successfully');
    }
}
