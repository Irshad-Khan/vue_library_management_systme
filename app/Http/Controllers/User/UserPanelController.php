<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

class UserPanelController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');

    }

    public function contact(){
        return view('contact');

    }

    public function contactStore(Request $request){
        $request->validate(rules:[
            'name'=>['required'],
            'contact_number'=>['required'],
            'subject'=>['required'],
            'email'=>['required', 'email'],
            'message'=>['required'],

         ]);
         $contact = new ContactUs();
         $contact->name = $request->name;
         $contact->contact_number = $request->contact_number;
         $contact->subject = $request->subject;
         $contact->email = $request->email;
         $contact->message = $request->message;
         $contact->save();
         return redirect()->back()->with('success', 'We received your query. Our agent will contact you soon!');
    }
}
