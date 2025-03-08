<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Сохраните сообщение в базе данных (опционально)
        Message::create($request->all());

        // Отправка email
        Mail::to('your-email@example.com')->send(new \App\Mail\ContactMessage($request));

        return back()->with('success', 'Сообщение отправлено!');
    }
}
