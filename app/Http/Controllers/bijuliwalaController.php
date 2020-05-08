<?php

namespace App\Http\Controllers;

use App\Contact;
use App\PhoneNumber;
use Illuminate\Http\Request;

class bijuliwalaController extends Controller
{
    public function home(){

        return view('home');

    }

    public function PhoneNumberData(){

       request()->validate([
           'phone_number'=> 'required'
       ]);

       $NumberStore = new PhoneNumber();
       $NumberStore->phone_number= request('phone_number');
       $NumberStore->save();

       return back()->withMessage('Thank you, we will give you service soon');

    }

    public function PhoneNumberList(){

        $phoneLists = PhoneNumber::all();
        return view('phonelists', compact('phoneLists'));
    }



    public function page2(){

        return view('page2');

    }

    public function page3(){

        return view('page3');

    }


}
