<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $info = DB::table('info')->get();
        $header = DB::table('headers')->get()->keyBy('page');
        return view('home', compact('info', 'header'));
    }
}
