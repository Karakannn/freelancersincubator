<?php

namespace App\Http\Controllers;

use App\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Notifications\LecturerMessage;
use App\Admin;
use App\Http\Requests\StoreLecturerRequest;

class LecturerController extends Controller {
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('lecturer');
    }


    public function register(Request $request, Admin $admin) {

        Lecturer::create($request->all());
        $admin->notify(new LecturerMessage($request));

        return redirect()->back()->with('message', 'Your information has been registered successfully');
    }
}