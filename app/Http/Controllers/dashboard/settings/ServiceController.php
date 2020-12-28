<?php

namespace App\Http\Controllers\dashboard\settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\ServiceRequest;
use App\models\front\Service;
use GuzzleHttp\Psr7\ServerRequest;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services =  Service::paginate(40);

        return view('website.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('website.services.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        Service::create($request->all());
        return redirect()->route('admin.front.service.index')->with('success','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\front\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\front\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('website.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\front\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, Service $service)
    {

        $service->update($request->all());

        return redirect()->route('admin.front.service.index')->with('success','updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\front\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if(!$service)
        {
            return redirect()->back();
        }
        $service->delete();

        return redirect()->route('admin.front.service.index')->with('success','Deleted Successfully');
    }
}
