<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class SendMailController extends Controller
{
    public function sendMail(Request $request) {

        // dd($request);
        Mail::to('maksimpavlovich90@gmail.com')->send(new SendMail($request->all()));
        
        // dump($request);
        return Redirect::route('indexO')->with('status', 'Сообщение отправлено!');
    }
}
