<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

       $newMessage = new  Message();
       $newMessage->name = $request->input('name');
       $newMessage->email = $request->input('email');
       $newMessage->message = $request->input('message');

       $newMessage->save();

        return redirect('/')->with('success', 'Your message has been sent!');
    }
}
