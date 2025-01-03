<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //contactIndex
    public function contactIndex(){
        return view('backend.contact.contact');
    }


    //Store Index
    public function contactStore(Request $request){
        // dd($request->all());

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return response()->json([
           "success" => "thanks for subscribe."
        ]);
    }
}
