<?php

namespace Nesru\warka\controllers;

use Illuminate\Http\Request;
use Nesru\warka\Models\Contact;
use Nesru\warka\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController
{
    public function index()
    {
       return view('warka::contact');
    }
    public function submit(Request $request)
    {
      Contact::create([
         'name' => $request->name,
         'email' => $request->email,
         'message' => $request->message,
         'phone' => $request->phone
        ]);
      Mail::to(config('warka.send_email_to'))->send(new ContactMail($request->all())); 
      return back();
    }
}
