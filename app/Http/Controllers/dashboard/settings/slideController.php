<?php

namespace App\Http\Controllers\dashboard\settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\slideRequest;
use App\models\front\Slide;
use Illuminate\Http\Request;

class slideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $slides = Slide::paginate(40);

        return view('website.slide.index',compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(slideRequest $request)
    {
        $data = $request->all();

        if(file_exists($request->image))
        {
            $image = UploadImage('slide',$request->image);
            $data['image'] = $image;
        }
        Slide::create($data);
        return redirect()->route('admin.front.slide.index')->with('success','Your slide added successfully');
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
        $slide = Slide::find($id);

        return view('website.slide.edit',compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(slideRequest $request, $id)
    {

        $slide = Slide::findOrFail($id);
        $data = $request->all();
        if(is_file($request->image))
        {
            $image = UploadImage('slide',$request->image);
            $data['image'] =  $image;
        }
        $slide->update($data);
        return redirect()->route('admin.front.slide.index')->with('success','Your Slide added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);
        $slide->delete();
        return redirect()->back()->with('success','deleted Successfully');
    }
}
