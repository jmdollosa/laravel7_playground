<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

use Validator;

class ContactsController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('contact.create' );
    }

    public function edit(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required'
        ]);

        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect()->route('contact.create')->with( 'alert', [
            'type' => 'success',
            'message' => 'Contact has been created successfully'
        ]);
    }

    public function update(Contact $contact, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required'
        ]);

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->save();

        return redirect()->route('contact.index')->with( 'alert', [
            'type' => 'info',
            'message' => 'Contact ('.$contact->name.') has been updated successfully'
        ]);
    }

}
