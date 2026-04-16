<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Email;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('espace_patient.contact');
    }

    public function MessageEmails()
    {
        $emailsBD=Email::all();
        return view('espace_doctor.dashbord.emails',['emailsBD'=>$emailsBD]);
    }
   
    public function submitForm(Request $request)
    {
        
        $data= request()->all();
        $name=request()->name;
        $email=request()->email;
        $message=request()->message;

        

        Email::create([
            'Nom'=>$name,
            'Email'=>$email,
            'Message'=>$message,
        ]);
        Mail::to('fatimazahranamaoui90@gmail.com')->send(new ContactMail($data));
        return view('espace_patient.contact');
    }
    
}
