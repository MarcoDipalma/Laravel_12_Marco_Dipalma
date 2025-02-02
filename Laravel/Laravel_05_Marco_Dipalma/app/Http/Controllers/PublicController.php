<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function contactUs(){
        return view('contattaci');
    }

    public function submit(Request $request){
        // dd($request->all());

        $email = $request->input('email');
        $username = $request->input('username');
        $usermessage = $request->input('usermessage');

        Mail::to($email)->send(new ContactMail($email, $username, $usermessage));

        return redirect()->route('home')->with('status', 'Email inviata con successo, controlla la tua casella di posta');
    }
}
