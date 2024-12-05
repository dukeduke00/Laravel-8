<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view("Contact");
    }

    public function getAllContacts()
    {
        $allContacts = ContactModel::all(); // Isto kao da smo napisali : SELECT * FROM contacts
        return view("allContacts", compact("allContacts"));

    }

    public function sendContact(Request $request)
    {
        $request->validate([
            "email" => "required|string|unique:contacts",
            "subject" => "required|string",
            "description" => "required|string|min:5|max:50",
        ]);

       //  echo "Email od: ".$request->get("email"). " Naslov: ".$request->get("subject"). " Poruka: ".$request->get("description");

        ContactModel::create([
            "name" => $request->get("email"),
            "subject" => $request->get("subject"),
            "message" => $request->get("description")
        ]);

        return redirect("/shop");
    }

    public function deleteContact($contact)
    {
        $singleContact = ContactModel::where(['id' => $contact])->first();

        if($singleContact === null)
        {
            die("Ovaj kontakt ne postoji");
        }

        $singleContact->delete();

        return redirect()->back();
    }


}
