<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contactform(){

        return view('contacts.contactform');

    }

    public function contactFormData(){

        request()->validate([
            'phone'=> 'required',
            'name'=> 'required',
            'address'=> 'required',
            'message'=> 'required'
        ]);


        //    $cont = new Contact();
        //    $cont->phone = request('phone');
        //    $cont->name = request('name');
        //    $cont->address = request('address');
        //    $cont->message = request('message');
        //    $cont->save();
        //    return redirect('/home');

        Contact::create(request()->except('_token'));
        return back()->withMessage('Thank you, we will give you service soon');

    }

    public function contactList(){

        $contactLists = Contact::all();
        return view('contacts.contactlist', compact('contactLists'));

    }
}
