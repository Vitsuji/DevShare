<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

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
    public static function index()
    {
        $projects = Project::orderBy('id')->paginate(10);
        return view('home')->withProjects($projects);
    }
}
