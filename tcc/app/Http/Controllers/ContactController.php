<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Contact;


class ContactController extends Controller
{

    const email = 'monitecetec@gmail.com';

    public function submit(Request $request){
         
        $data = ['nome' => $request->nome, 'email' => $request->email, 'mensagem' => $request->mensagem];

        $mail = Mail::to(ContactController::email)->send(new Contact($data));

        return redirect('/inicio');

    }
}
