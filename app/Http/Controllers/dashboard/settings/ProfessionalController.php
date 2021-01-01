<?php

namespace App\Http\Controllers\dashboard\settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\ProfessionalRequest;
use App\models\front\Professional;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
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
        $professionals = Professional::paginate(4);
        return view('website.professional.index',compact('professionals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('website.professional.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfessionalRequest $request)
    {
        $data = $request->all();
        if(is_file($request['image']))
        {
            $image = UploadImage('professional',$request['image']);
            $data['image'] = $image;
        }
        Professional::create($data);

        return redirect()->route('admin.front.professional.index')->with('success','Professional Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\front\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function show(Professional $professional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\front\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function edit(Professional $professional)
    {
        return view('website.professional.edit',compact('professional'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\front\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professional $professional)
    {

        $data = $request->all();

        if(is_file($request['image']))
        {
            if($professional->image)
            {
                DeleteImage('/style/front/image/'.$professional->image);

            }

            $image = UploadImage('professional',$request['image']);
            $data['image'] = $image;
        }
        $professional->update($data);

        return redirect()->route('admin.front.professional.index')->with('success','Professional updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\front\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professional $professional)
    {
        if($professional->image)
        {
             DeleteImage('/style/front/image/'.$professional->image);

        }
        $professional->delete();

        return redirect()->back()->with('success','Deleted Successfully');
    }
}
