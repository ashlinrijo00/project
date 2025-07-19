<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Events\ContactForm;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    //

    public function show()
        {
            return view('contact'); 
        }

     public function submit(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|numeric|min:1',
        'email'   => 'required|email|max:255',
        'address' => 'required|string|max:255',
    ]);

    Contact::create($validated);

    event(new ContactForm($validated));

    return back()->with('success', 'Form submitted successfully!');
}
}
