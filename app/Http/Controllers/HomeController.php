<?php

namespace App\Http\Controllers;

use App\Blogs;
use App\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('index');
    }

    public function webinar()
    {
        return view('webinar');
    }
    
    public function blogs()
    {
        $blog = Blogs::where('status',1)->get();

        return view('blogs',compact('blog'));

    }

    public function videoCourses()
    {
        return view('video_courses');
    }

    public function about()
    {
        return view('about');
    }

    public function lecturer()
    {
        return view('lecturer');
    }
}
