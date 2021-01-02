<?php

namespace App\Http\Controllers\Admin;

use App\Blogs;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateBlogsRequest;
use Illuminate\Support\Str;

class BlogsController extends Controller {

    /**
     * Display a listing of Blogs.
     *
     * @return \Illuminate\Http\Response
     */
    public function switch(Request $request){
        $article=Blogs::findOrFail($request->id);
        $article->status=$request->statu =='true' ? 1: 0;
        $article->save();
    }
    public function index() {
        
        $articles = Blogs::all();

        return view('admin.blogs.index', compact('articles'));
    }
    
    /**
     * Show the form for creating new Blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::all();
        return view('admin.blogs.create',compact('categories'));

    }
    
    /**
     * Store a newly created Blog in storage.
     *
     * @param  \App\Http\Requests\Admin\StoreSliderRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $articles = new Blogs();

        $articles->title = $request->title;
        $articles->category_id = $request->category;
        $articles->body = $request->body;
        $articles->slug = $request->slug;
        $articles->short_info = $request->short_info;
        $articles->tags = $request->tags;
        $articles->author_id = $request->author;



        if($request->hasFile('header_image')) {
            $imageName = Str::slug($request->title).'.'.$request->header_image->getClientOriginalExtension();
            $request->header_image->move(public_path('uploads'),$imageName);
            $articles->header_image = 'uploads/'.$imageName;
        }
        if($request->hasFile('main_image')) {
            $imageName = Str::slug($request->short_info).'.'.$request->main_image->getClientOriginalExtension();
            $request->main_image->move(public_path('uploads'),$imageName);
            $articles->main_image = 'uploads/'.$imageName;
        }
        $articles->save();
        return redirect()->route('admin.blogs.index');
    }
    
    /**
     * Show the form for editing Blog.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $findArticle=Blogs::findOrFail($id);
        $categories=Category::all();
        return view('admin.blogs.edit',compact('categories','findArticle'));
    }

    /**
     * Update Blogs in storage.
     *
     * @param  \App\Http\Requests\Admin\UpdateSliderRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {


        $articles = Blogs::findOrFail($id);

        $articles->title = $request->title;
        $articles->category_id = $request->category;
        $articles->body = $request->body;
        $articles->slug = $request->slug;
        $articles->short_info = $request->short_info;
        $articles->tags = $request->tags;
        $articles->author_id = $request->author;



        if($request->hasFile('header_image')) {
            $imageName = Str::slug($request->title).'.'.$request->header_image->getClientOriginalExtension();
            $request->header_image->move(public_path('uploads'),$imageName);
            $articles->header_image = 'uploads/'.$imageName;
        }
        if($request->hasFile('main_image')) {
            $imageName = Str::slug($request->short_info).'.'.$request->main_image->getClientOriginalExtension();
            $request->main_image->move(public_path('uploads'),$imageName);
            $articles->main_image = 'uploads/'.$imageName;
        }
        $articles->save();

        return redirect()->route('admin.blogs.index');
    }


    /**
     * Display Blog.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

    }


    /**
     * Remove Blog from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function recover($id) {
        Blogs::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Delete all selected Blogs at once.
     *
     * @param Request $request
     */
    public function delete($id) {
        Blogs::find($id)->delete();
        return redirect()->route('admin.blogs.index');
    }


    /**
     * Restore Testimonials from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $articles = Blogs::onlyTrashed()->orderBy('deleted_at','DESC')->get();
        return view('admin.blogs.trashed',compact('articles',$articles));
    }

    /**
     * Permanently delete Blog from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function harddelete($id)
    {
        $article = Blogs::onlyTrashed()->find($id);
        if (File::exists($article->image)){
            File::delete(public_path($article->image));
        }

        $article->forceDelete();

        return redirect()->route('admin.blogs.index');
    }

}