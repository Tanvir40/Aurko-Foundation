<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;


class ContactsController extends Controller
{

 

   public function savecontacts(Request $request) {

       $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contacts::create($request->all());

        return redirect()->back()->with('success','Message Sent successfully.');
    

     }

public function deletemessageinfo($id)
{
    Contacts::where('id',$id)->delete();
    return redirect()->back()->withInput();
}

/*
     public function savecontactsshow()
    {
        $contacts = Contacts::latest()->paginate(5);

        return view('unsercontactsinfo',compact('contacts'));
        return view('backend.dashboard.unsercontactsinfo', ['contacts' => $contacts]);

       $contacts = Contacts::all();
         return view('backend.dashboard.unsercontactsinfo', compact('contacts'));
    }*/


   
}
