<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;

use Closure;
Class HomeMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $info = DB::table('info')->get();
        $slider = DB::table('sliders')->get();
        $testimonial = DB::table('testimonials')->get();
        $header = DB::table('headers')->get()->keyBy('page');
        $course = DB::table('courses')
            ->leftjoin('course_user', 'courses.id', '=', 'course_user.course_id')
            ->leftjoin('users', 'course_user.user_id', '=', 'users.id')
            ->select('courses.slug', 'courses.id', 'courses.title', 'courses.course_image', 'courses.description', 'courses.price', 'courses.start_date', 'courses.start_time', 'users.name', 'users.profile_image')
            ->where(['courses.course_type' => '1',
                    'courses.published' => '1'])
            ->orderBy('courses.id', 'DESC')
            ->get();
        $video = DB::table('courses')
            ->leftjoin('course_user', 'courses.id', '=', 'course_user.course_id')
            ->leftjoin('users', 'course_user.user_id', '=', 'users.id')
            ->select('courses.slug', 'courses.id', 'courses.title', 'courses.course_image', 'courses.description', 'courses.price', 'courses.start_date', 'users.name', 'users.profile_image')
            ->where(['courses.course_type' => '2',
                    'courses.published' => '1'])
            ->orderBy('courses.id', 'DESC')
            ->get();
        $blogs = DB::table('blog')
            ->leftjoin('users', 'blog.author', '=', 'users.id')
            ->select('blog.id', 'blog.title', 'blog.slug', 'blog.image', 'blog.body', 'blog.created_at')
            ->orderBy('blog.id', 'DESC')
            ->get();

        $variables = [
            'info' => $info,
            'slider' => $slider,
            'testimonial' => $testimonial,
            'header' => $header,
            'courses' => $course,
            'blog' => $blogs,
            'video' => $video
            ];
        $request->merge($variables);
        // $request['testing']= 'it works!';
        view()->share($variables);
        return $next($request);
    }
}