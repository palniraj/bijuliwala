<?php

namespace App\Http\Controllers\Api;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bijuliwalaController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth')->except('index');
    // }

    public function index(){

        return Contact::all();

    }

    public function contactId($id){

        if(Contact::where('id', $id)->exists()){
            $cont = Contact::where('id', $id)->get();
            return response($cont, 200);
        }else{
            return response()->json([
                'message'=> "Contact Data Not Found!"
            ], 400);
        }

    }

    public function store(){
        request()->validate([
            'phone'=> 'required',
            'name'=> 'required',
            'address'=> 'required',
            'message'=> 'required'
        ]);


           $cont = new Contact();
           $cont->phone = request('phone');
           $cont->name = request('name');
           $cont->address = request('address');
           $cont->message = request('message');
           $cont->save();

           return response()->json([
            'message'=>'Message sent',
            'data'=> $cont
        ], 201);
    }

    public function update($id){
        request()->validate([
            'phone'=> 'required',
            'name'=> 'required',
            'address'=> 'required',
            'message'=> 'required'
        ]);

        if(Contact::where('id', '$id')->exists()){

            $cont = Contact::find('$id');
            $cont->phone = request('phone');
            $cont->name = request('name');
            $cont->address = request('address');
            $cont->message = request('message');
            $cont->save();

                 return response()->json([
                     'message'=> "Update Sucessfull!"
                 ], 200);
        }else{

            return response()->json([
                'message'=> "Contact Id Not Fount!"
            ], 404);

        }



    }



    public function delete($id){

        if(Contact::where('id', $id)->exists()){
            $cont = Contact::find($id);
            $cont->delete();

            return response()->json([
                'message'=> "Contact is Deleted!"
            ], 202);
        }else{
            return response()->json([
                'message'=>"Contact id Not Found!"
            ], 404);

        }

    }

}
