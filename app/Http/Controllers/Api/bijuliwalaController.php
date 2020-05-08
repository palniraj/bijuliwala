<?php

namespace App\Http\Controllers\Api;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PhoneNumber;

class bijuliwalaController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth')->except('index');
    // }



    public function phoneNumber(){

        return PhoneNumber::all();

    }

    public function PhoneId($id){

        if(PhoneNumber::where('id', $id)->exists()){
            $cont = phoneNumber::where('id', $id)->get();
            return response($cont, 200);
        }else{
            return response()->json([
                'message'=> "Clients Id Data Not Found!"
            ], 400);
        }

    }

    public function PhoneStore(){

        request()->validate([
            'phone_number'=> 'required'
        ]);

        $NumberStore = new PhoneNumber();
        $NumberStore->phone_number= request('phone_number');
        $NumberStore->save();

        return response()->json([
            'message'=>'Message sent',
            'data'=> $NumberStore
        ], 201);

    }


    public function PhoneUpdate($id){

        // request()->validate([
        //     'phone_number'=> 'required'
        // ]);

        // if(PhoneNumber::where('id', '$id')->exists()){
        // $NumberStore = PhoneNumber::find('$id');
        // $NumberStore->phone_number= request('phone_number');
        // $NumberStore->save();

        // return response()->json([
        //     'message'=>'Message sent',
        //     'data'=> $NumberStore
        // ], 200);

        // }else{
        //     return response()->json([
        //         'message'=> "Contact Id Not Fount!"
        //     ], 404);
        // }

    }


    public function PhoneDelete($id){

        if(PhoneNumber::where('id', $id)->exists()){
            $cont = phoneNumber::find($id);
            $cont->delete();

            return response()->json([
                'message'=> "Phone Number is Deleted!"
            ], 202);
        }else{
            return response()->json([
                'message'=>"Clients id Not Found!"
            ], 404);

        }

    }


}
