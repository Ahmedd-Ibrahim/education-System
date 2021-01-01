<?php

namespace App\Http\Controllers\dashboard\settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\SiteSubjectRequest;
use App\models\front\SiteSubject;
use Illuminate\Http\Request;

class SiteSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = SiteSubject::paginate(40);
        
        return view('website.site_subject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.site_subject.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiteSubjectRequest $request)
    {

        $data = $request->all();
        if(is_file($request->image))
        {
            $data['image'] = UploadImage('site_subject',$request->image);
        }
        SiteSubject::create($data);
        return redirect()->route('admin.front.site-subject.index')->with('success','');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\front\SiteSubject  $siteSubject
     * @return \Illuminate\Http\Response
     */
    public function show(SiteSubject $siteSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\front\SiteSubject  $siteSubject
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSubject $siteSubject)
    {
        return view('website.site_subject.edit',compact('siteSubject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\front\SiteSubject  $siteSubject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteSubject $siteSubject)
    {

        $data = $request->all();

        if(is_file($request->image))
        {
            if($siteSubject->image)
            {
                DeleteImage('/style/front/image/'.$siteSubject->image);

            }
            $data['image'] = UploadImage('site_subject',$request->image);
        }

        $siteSubject->update($data);

        return redirect()->route('admin.front.site-subject.index')->with('success','updated successflly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\front\SiteSubject  $siteSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSubject $siteSubject)
    {
        if(!$siteSubject)
        {
            return redirect()->back();
        }

        if($siteSubject->image)
            {
                DeleteImage('/style/front/image/'.$siteSubject->image);

            }

        $siteSubject->delete();
        return redirect()->back()->with('susccess','Deleted successfully');
    }
}
