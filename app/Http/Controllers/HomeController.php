<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller
{
    public function contact()
    {
        return view('contact_create');
    }

    public function storeContact(Request $request)
    {
        $contact = new Contact();
        $contact->name = "{$request->get('fname')} {$request->get('lname')}";
        $contact->email = $request->get('email');
        $contact->description = $request->get('description');
        $r = $contact->save();
        if($r) {
            \Log::debug("success");
        }
    }
}
