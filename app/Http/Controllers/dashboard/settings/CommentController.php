<?php

namespace App\Http\Controllers\dashboard\settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\front\CommentRequest;
use App\models\front\Blog;
use App\models\front\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::paginate(40);

        return view('website.comments.index',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs = Blog::select('title','id')->get();

        return view('website.comments.create',compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        $post = Blog::findOrFail($request->blog_id);

        $comment = new Comment($request->except('blog_id'));

        $post->Comments()->save($comment);

        return redirect()->route('admin.front.comment.index')->with('success','Comemnt Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\front\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\front\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        $blogs = Blog::select('title','id')->get();

        return view('website.comments.edit',compact('comment','blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     *
     * @param  \App\models\front\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->all());

        return redirect()->route('admin.front.comment.index')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\front\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        if(!$comment)
        {
            return redirect()->back();
        }
        $comment->delete();
        return redirect()->back()->with('success','Deleted Sucessully');
    }

    public function active($id)
    {
        $comment = Comment::findOrFail($id);


        $comment->active == 'true' ? $comment->update(['active'=>'false']) : $comment->update(['active'=>'true']);

        return redirect()->back()->with('success','activa updated');
    }
}
