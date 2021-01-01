<?php

namespace App\Http\Controllers\dashboard\settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\SiteExperinceRequest;
use App\Http\Requests\front\SiteSubjectRequest;
use App\models\front\SiteExperince;
use Illuminate\Http\Request;

class SiteExperinceController extends Controller
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
        $experince = SiteExperince::first();

        return view('website.experince.index',compact('experince'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.experince.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiteExperinceRequest $request)
    {

        SiteExperince::create($request->all());

        return redirect()->route('admin.front.site-experince.index')->with('success','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\front\SiteExperince  $siteExperince
     * @return \Illuminate\Http\Response
     */
    public function show(SiteExperince $siteExperince)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\front\SiteExperince  $siteExperince
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteExperince $siteExperince)
    {

        return view('website.experince.edit',compact('siteExperince'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\front\SiteExperince  $siteExperince
     * @return \Illuminate\Http\Response
     */
    public function update(SiteExperinceRequest $request, SiteExperince $siteExperince)
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\front\SiteExperince  $siteExperince
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteExperince $siteExperince)
    {
        if(!$siteExperince)
        {
            return redirect()->back();
        }

        $siteExperince->delete();

        return redirect()->back()->with('success','Deleted Successfully');
    }
}
