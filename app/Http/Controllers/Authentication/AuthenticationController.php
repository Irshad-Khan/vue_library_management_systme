<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function showLoginForm(){
        return view('authentication.login');

    }

    public function showRegistrationForm(){
        return view('authentication.register');


    }

    public function registration(Request $request){
        $user = new User();
        $user->user_name = $request->user_name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('authentication.register.form')->with('success', 'Registration Successfully');


    }
}
