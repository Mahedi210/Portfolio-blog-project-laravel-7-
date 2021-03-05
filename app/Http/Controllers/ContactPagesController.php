<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactPagesController extends Controller
{
    public function store(){

       $contact_form_data=request()->all();
       Mail::to('suvrohasan210@gmail.com')->send(new ContactFormMail($contact_form_data));
       return redirect('/');
    }
}
