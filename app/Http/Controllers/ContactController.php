<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        
        Contact::create($request->only(['name', 'email', 'subject', 'message']));
        return redirect()->route('contact.index')->with('success', 'Contact submitted.');
    }

    public function edit(Contact $contact)
{
    return view('contact.edit', compact('contact'));
}

public function update(Request $request, Contact $contact)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    $contact->update($request->all());
    return redirect()->route('contact.index')->with('success', 'Contact updated.');
}


    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('success', 'Contact deleted.');
    }
}
