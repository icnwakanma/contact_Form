<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use App\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        $contact = new ContactUs;
        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->subject = $request->subject;
        $contact->save();

        $contact = ContactUs::latest()->first();

        \Mail::to('icnwakanma@gmail.com')->send(new Contact($contact));

        //return new \App\Mail\Contact($contact);

        return redirect()->back();
    }
}
