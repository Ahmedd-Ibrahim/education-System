<?php

namespace App\Http\Controllers;

use App\models\BasicsInfo;
use App\models\front\Blog;
use App\models\front\Professional;
use App\models\front\Proof;
use App\models\front\Provide;
use App\models\front\Slide;
use App\models\front\Service;
use App\models\front\SiteExperince;
use App\models\front\SiteSubject;
use App\models\front\StaticTitle;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $info = GetBaseInfo();

        $slides = Slide::paginate(10);

        $provides = Provide::paginate(10);

        $services = Service::paginate(10);

        $static = StaticTitle::first();

        $professionals = Professional::paginate(4);

        $subjects = SiteSubject::paginate(9);

        $experinces = SiteExperince::first();

        $proofs = Proof::paginate(10);

        $blogs = Blog::paginate(3);

        return view('website.frontend.index',
        compact('info','slides','provides','services','static','professionals','subjects',
        'experinces','proofs','blogs'
    ));
    }

    public function blog(Request $request) // blog page
    {

        $key = $request->key;

        $blogs = Blog::paginate(12);

        if($request->has('key'))
        {
            $blogs = Blog::where('title','like','%'.$request->key .'%')->orWhere('content','like','%'.$request->key .'%')->paginate(12);

        }
        $slide = Slide::first();

        $info = GetBaseInfo();

        return view('website.frontend.blog',compact('info','slide','blogs'));

    }

    public function SinglePage($id)
    {

        $post = Blog::findOrFail($id);

        $slide = Slide::first();

         $latests = Blog::latest()->limit(3)->get();

         $info = GetBaseInfo();

         $comments = $post->Comments()->where('active','true')->get();

         $subjects = SiteSubject::paginate(6);
        return view('website.frontend.blog-single-page',compact('post','slide','latests','info','subjects','comments'));

    }


    public function Contact()
    {
        $info = GetBaseInfo();

        $slide = Slide::first();

        return view('website.frontend.contact',compact('info','slide'));


    }

    public function Path()
    {
        $info = GetBaseInfo();

        $slide = Slide::first();

        $subjects = SiteSubject::paginate(9);

        return view('website.frontend.study_path',compact('info','slide','subjects'));


    }

    public function Professtional()
    {
        $info = GetBaseInfo();

        $slide = Slide::first();

        $professionals = Professional::paginate(20);

        return view('website.frontend.professtional',compact('info','slide','professionals'));
    }

    public function About()
    {
        $info = GetBaseInfo();

        $slide = Slide::first();

        // $provides = Provide::paginate(10);

        $services = Service::paginate(10);

        $static = StaticTitle::first();


        $experinces = SiteExperince::first();

        $proofs = Proof::paginate(10);


        return view('website.frontend.about',
        compact('info','slide','services','static',
        'experinces','proofs'
    ));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
