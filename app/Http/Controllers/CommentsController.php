<?php

namespace App\Http\Controllers;

use App\Blogs;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

class CommentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request,$post_id)
    {

        $post = Blogs::find($post_id);

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->e_mail = $request->e_mail;
        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->post()->associate($post);


        $comment->save();


        return redirect()->route('blogs.show', [$post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Comment::where('post_id',$id)->get();

        return view('admin.comments.index',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $findComments = Comment::where('id',$id)->first();
        $articles = Blogs::all();
        return view('admin.comments.edit',compact('findComments','articles'));
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
        $comment = Comment::find($id);
        $comment->name = $request->name;
        $comment->e_mail = $request->e_mail;
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;

        $comment->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request,$id)
    {
        $comment = Comment::findOrFail($request->id);
        $comment->delete();
        return redirect()->back();
    }

    public function switch(Request $request){
        $category = Comment::findOrFail($request->id);
        $category->approved = $request->statu == 'true' ? 1 : 0;
        $category->save();
    }
}
