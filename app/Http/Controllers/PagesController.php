<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        if (Auth::check()) {
            return redirect()->action('HomeController@index');
        } else {
            return view('pages.index');
        }
        
    }
}
