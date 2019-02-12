<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use VisitLog;
class HomeController extends Controller
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
    public function index()
    {
        $visit=VisitLog::all();
        return view('home', compact('visit'));
    }
}
