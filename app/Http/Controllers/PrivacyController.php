<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PrivacyController extends Controller {
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('privacy');
    }
}