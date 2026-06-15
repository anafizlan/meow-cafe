<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function edit()
    {
        $contact = Contact::first();

        return view('admin.contact', compact('contact'));
    }

    public function update(Request $request)
    {
        $contact = Contact::first();

        $contact->update([
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return back()->with('success', 'Contact updated successfully!');
    }
}