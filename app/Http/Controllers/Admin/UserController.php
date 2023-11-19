<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();    // select * from Role table 
        return view('admins.users.index',compact('users'));
         }


         public function create(){
           return view('admins.users.create');
         }

         public function store(Request $request){
            $user = new User();
            $user->user_name = $request->user_name;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->cnic_number = $request->cnic_number;
            $user->phone_number = $request->phone_number;
            $user->role_id = $request->role_id;
            $user->status = $request->status;
            $user->save();
            return redirect()->route('admin.users.index')->with('success', 'User Added Successfully!');
          }


       public function delete($id){
        User::find($id)->delete();
        return redirect()->route('admin.users.index')->with('success', 'User Deleted Successfully!');
       }


       public function show($id){
        $user = User::findOrFail($id);
        return view('admins.users.show',compact('user'));
     }

     public function edit($id){
        $user = User::findOrFail($id);
        $users = User::all();
        return view('admins.users.edit',compact('user', 'users'));
     }

     public function update(Request $request){
        $user = User::findOrFail($request->id);
        $user->user_name = $request->user_name;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->cnic_number = $request->cnic_number;
        $user->phone_number = $request->phone_number;
        $user->role_id = $request->role_id;
        $user->status = $request->status;
        $user->save();
        return redirect()->route('admin.users.index')->with('success', 'User Updated Successfully!');
    
    }
}

