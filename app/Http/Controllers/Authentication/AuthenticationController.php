<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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
        $user->role_id = 3;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make(trim($request->password));
        $user->save();
        return redirect()->route('authentication.register.form')->with('success', 'Registration Successfully');


    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
     
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->with('error','Oppes! You have entered invalid credentials');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function contact(){
        return view('authentication.contact');
    }
}
