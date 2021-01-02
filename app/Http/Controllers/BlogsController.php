<?php

namespace App\Http\Controllers;

use App\Blogs;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BlogsController extends Controller {
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view('blogs');
    }

    public function show(Request $request) {
        $blog = Blogs::find($request->id);
        $comments = $blog->comments()->where('approved',1)->get();
        $categories = Category::where('statu',1)->get();
        $lastBlog =  DB::table('articles')->orderBy('created_at', 'desc')->first();

        return view('blog', compact('comments','categories','lastBlog','blog'));
    }
    public function category($slug) {
        $category = Category::where('slug', $slug)->first();
        $blog = Blogs::where('category_id',$category->id)->where('status',1)->get();
        return view('category',compact('category','blog'));
    }
}