<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index($id)
    {
        $profile = User::find($id);
        return view('profile.index')->withProfile($profile);
    }

    public function edit($id) {
        $profile = Auth::user();
        
        if($profile->id != $id) {
            return view('errors.denied');
        }else {
            return view('profile.edit')->withProfile($profile);
        }
    }
}
