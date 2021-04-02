<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return back()->with('flash', 'Your message has been sent successfully.');
    }

    public function destroy(Contact $contact)
    {
        if (!auth()->user()->admin == 1) {
            return response('You do not have permission to delete this message.', 403);
        }

        $contact->delete();

        return back();
    }
}
