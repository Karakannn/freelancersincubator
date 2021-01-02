<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller {

    public function index() {

        $user_id = auth()->user()->id;
        $video = DB::table('courses')
            ->leftjoin('course_user', 'courses.id', '=', 'course_user.course_id')
            ->leftjoin('users', 'course_user.user_id', '=', 'users.id')
            ->leftjoin('course_student', 'courses.id', '=', 'course_student.course_id')
            ->select('courses.slug', 'courses.id', 'courses.title', 'courses.course_image', 'courses.description', 'courses.price', 'courses.start_date', 'users.name', 'users.profile_image')
            ->where('course_student.user_id', '=', $user_id)
            ->orderBy('courses.id', 'DESC')
            ->get();

        return view('account', compact('video'));
    }
}