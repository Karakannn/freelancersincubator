<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ErrorController extends Controller {
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('error');
    }
}