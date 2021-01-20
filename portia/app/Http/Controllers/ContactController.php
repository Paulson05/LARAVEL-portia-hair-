<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
   

    public function showcontact()
    {
        //
        $contact=Contact::all();
        return view('contact.showcontact')->with([
            'contacts'=>$contact,
            ]);
    }
    
    public function contactitems(Contact $id)
    {
        //
        return view('contact.contactitems')->with([
            'contact'=>$id,
        ]);
  
    }
}
