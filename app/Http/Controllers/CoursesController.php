<?php

namespace App\Http\Controllers;

use App\Notifications\QuickInboxMessage;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\QuickFormRequest;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class CoursesController extends Controller {

    public function __construct() {
        //$this->middleware('auth');
    }

    public function show($course_slug) {
        
        if (Auth::check()) {
            $user_id = auth()->user()->id;
        }else {
            $user_id = '0';
        }
        
        $course = DB::table('courses')
                    ->leftjoin('course_user', 'courses.id', '=', 'course_user.course_id')
                    ->leftjoin('users', 'course_user.user_id', '=', 'users.id')
                    ->select('courses.id as id', 'courses.title', 'courses.header_image', 'courses.course_image', 'courses.description', 'courses.price', 'courses.duration', 'courses.slug', 'courses.start_date', 'courses.start_time', 'courses.published', 'users.id as user_id', 'users.name', 'users.email', 'users.presentation', 'users.phone', 'users.linkedin_url', 'users.facebook_url', 'users.twitter_url', 'users.website_url', 'users.profile_image')
                    ->where('courses.slug', '=', $course_slug)
                    ->get()->first();
                    
         $courses_right = DB::table('courses')
                    ->leftjoin('course_user', 'courses.id', '=', 'course_user.course_id')
                    ->leftjoin('users', 'course_user.user_id', '=', 'users.id')
                    ->select('courses.id as id', 'courses.title', 'courses.header_image', 'courses.course_image', 'courses.description', 'courses.price', 'courses.duration', 'courses.slug', 'courses.start_date', 'courses.start_time', 'courses.published', 'users.id as user_id', 'users.name', 'users.email', 'users.presentation', 'users.phone', 'users.linkedin_url', 'users.facebook_url', 'users.twitter_url', 'users.website_url', 'users.profile_image')
                    ->where('courses.slug', '!=', $course_slug)
                    ->limit(5)
                    ->inRandomOrder()
                    ->get();
                    
        
        $lessons = DB::table('lessons')
                    ->where('course_id', '=', $course->id)
                    ->get();
        $is_registered = DB::table('course_student')
                    ->where([
                        'user_id' => $user_id,
                        'course_id' => $course->id])
                    ->get()->first();
        $page_title = $course->title;
        if ($course->published == '0') {
            return view('error', compact('info'));   
        }else {
            return view('course', compact('course', 'courses_right', 'page_title', 'lessons', 'info', 'is_registered'));   
        }
    }


    public function mailToAdmin(QuickFormRequest $message, Admin $admin) {
        $admin->notify(new QuickInboxMessage($message));
        // redirect the user back
        return redirect()->back()->with('message', 'Thanks for the message! We will get back to you soon!');
    }
    
    public function register(Request $request, $course_slug) {
        if (! Auth::check()) {
            return redirect()->guest('register');
        }else {
        $info = DB::table('info')->get();
        $header = DB::table('headers')->get()->keyBy('page');
            $user_id = auth()->user()->id;
            $course = DB::table('courses')
                ->where('slug', '=', $course_slug)
                ->get()->first();

            $is_registered = DB::table('course_student')
                    ->where([
                        'course_id' => $course->id,
                        'user_id' => $user_id
                    ])
                    ->get()->first();
            
            if ($is_registered == "") {
                DB::table('course_student')->insert(
                ['course_id' => $course->id, 'user_id' => $user_id]
                );
                    return redirect()->back();   
            }else {
                return redirect()->guest('login');
            }
        }
    }
}
