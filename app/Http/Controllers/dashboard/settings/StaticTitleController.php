<?php

namespace App\Http\Controllers\dashboard\settings;

use App\Http\Controllers\Controller;
use App\models\front\StaticTitle;
use Illuminate\Http\Request;

class StaticTitleController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['permission:show website'])->only(['index']);
        $this->middleware(['permission:store website'])->only(['create','store']);
        $this->middleware(['permission:update website'])->only(['update','edit']);
        $this->middleware(['permission:delete website'])->only(['destroy']);
    }

    public function index()
    {
        $staticInfo = StaticTitle::first();

        return view('website.static_title.index',compact('staticInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\front\StaticTitle  $staticTitle
     * @return \Illuminate\Http\Response
     */
    public function show(StaticTitle $staticTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\front\StaticTitle  $staticTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(StaticTitle $staticTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\front\StaticTitle  $staticTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StaticTitle $staticTitle)
    {
        $staticTitle->update($request->all());
        return redirect()->back()->with('success','updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\front\StaticTitle  $staticTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaticTitle $staticTitle)
    {
        //
    }
}
