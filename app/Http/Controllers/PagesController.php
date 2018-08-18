<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        if (Auth::check()) {
            return HomeController::index();
        }else {
            return view('pages.index');
        }
        
    }
}
