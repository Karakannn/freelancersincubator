<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AboutController extends Controller {
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('about');
    }
}