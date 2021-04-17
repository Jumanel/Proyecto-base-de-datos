<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecive;
use Illuminate\Support\Facades\Mail;

class messagecontroller extends Controller
{
    public function store()
    {
       request()->validate([
       		'name' => 'required',
       		'email' => 'required|email',
       		'subject' => 'required',
       		'content' => 'required|min:4',
       ]);

       mail::to('juanmanueldiz1@gmail.com')->send(new MessageRecive($message));

       return 'mensaje enviado';
    }
}
