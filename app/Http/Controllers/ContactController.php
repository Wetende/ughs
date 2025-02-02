<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:100',
            'message' => 'required|string|max:1000',
        ]);

        // You can add code here to send email notifications
        // Mail::to('info@ughs.ac.ke')->send(new ContactFormMail($validated));

        // Store the message in database if needed
        // Contact::create($validated);

        return back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
