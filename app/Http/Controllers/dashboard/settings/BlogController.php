<?php

namespace App\Http\Controllers\dashboard\settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\BlogRequest;
use App\models\front\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(40);
        return view('website.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $data = $request->all();

        if(is_file($request->image))
        {
            $data['image'] = UploadImage('blog',$request->image);
        }

        Blog::create($data);

        return redirect()->route('admin.front.blog.index')->with('success','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\front\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\front\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('website.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\front\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {

        $data = $request->all();

        if(is_file($request->image))
        {
            if($blog->image)
            {
                 DeleteImage('/style/front/image/'.$blog->image);

            }
            $data['image'] = UploadImage('blog',$request->image);
        }

        $blog->update($data);
        return redirect()->route('admin.front.blog.index')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\front\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if(!$blog)
        {
            return redirect()->back();
        }

        if($blog->image)
            {
                 DeleteImage('/style/front/image/'.$blog->image);

            }
        $blog->delete();

        return redirect()->back()->with('success','Deleted Successfully');
    }
}
