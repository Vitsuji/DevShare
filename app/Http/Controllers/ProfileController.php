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
        if($profile) {
            return view('profile.index')->withProfile($profile);
        }else {
            return view('errors.404');
        }
       
    }

    public function edit($id) {
        $profile = Auth::user();
        
        if($profile->id != $id) {
            return view('errors.denied');
        }else {
            return view('profile.edit')->withProfile($profile);
        }
    }

    public function update (Request $request, $id) {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
        ]);

        $user = Auth::user();

        if($request->profile_img) {
            if($user->profile_img != 'default_avatar.png'){
                $profile_img = $event->profile_img;
                File::delete('img/uploads/profile/'.$profile_img);
            }
            $file = $request->profile_img;
            $now = new DateTime();
            $ido = '0';
            $file_name = $ido.'-'.$now->format('d-N-H-s').$request->profile_img->getClientOriginalName();
            $file->move('img/uploads/profile/', $file_name);

            $user->profile_img = $file_name;
            $user->name = $request->name;
            $user->email = $request->email;

            $user->save();
            return redirect()->route('user', $user->id);
        }

    }
}
