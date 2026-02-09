<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddContactRequest;
use App\Models\Contact;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function create()
    {
        return Inertia::render("Admin/Contact/Form");
    }

    public function store(AddContactRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->job_title = $request->job_title;
        $contact->company = $request->company;
        $contact->country = $request->country;
        $contact->country_code = $request->country_code;
        $contact->save();
        return redirect()->route("home")->with([
            'message' => 'Contact created successfully',
            'class' => 'success',
        ]);
    }

    public function edit(Contact $contact)
    {
        return Inertia::render("Admin/Contact/Form", [
            'contact' => $contact,
        ]);
    }

    public function update(AddContactRequest $request, Contact $contact, string $id)
    {
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->job_title = $request->job_title;
        $contact->company = $request->company;
        $contact->country = $request->country;
        $contact->country_code = $request->country_code;
        $contact->save();
        return redirect()->route("home")->with([
            'message' => 'Contact updated successfully',
            'class' => 'success',
        ]);
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        return redirect()->route("home")->with([
            'message' => 'Contact deleted successfully',
            'class' => 'success',
        ]);
    }

    
}
