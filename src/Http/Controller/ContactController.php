<?php

namespace Sultan\Contact\Http\Controller;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Sultan\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        // Mail::to('sultan@sultan.com')->send(new ContactMail()); // will send later. don't have the creds now
        // Mail::to(config('contact.send_email_to'))->send(new ContactMail()); // send mail from config file
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}