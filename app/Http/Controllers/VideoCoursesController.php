<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class VideoCoursesController extends Controller {
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        return view('video_courses');
    }
}