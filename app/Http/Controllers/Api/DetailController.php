<?php

namespace App\Http\Controllers\Api;

use App\Detail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Detail::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'sub_service_id'=>'required',
            'name'=>'required',
            'description'=>'required',
            // 'price'=>'required',
            'cover_img.*'=>'required|image|minmes:jpeg,png,jpg,gif,svg|max:2048'
            // 'cover_img'=>'required|image'

        ]);

        //store in database
        $allDetails = new Detail();
        $allDetails->sub_service_id = $request->input('sub_service_id');
        $allDetails->name = $request->input('name');
        $allDetails->description = $request->input('description');
        $allDetails->price = $request->input('price');
        // $allDetails->cover_img = $request->input('cover_img');

 // check if file is present
 if($request->has('cover_img')) {

    //store file in disk
    $filePath = $request->file('cover_img')->store('services');
    //saving file in database
    $allDetails->cover_img = $filePath;
}

        $allDetails->save();
        return response()->json([
            'message'=>'Message sent',
            'data'=> $allDetails
        ], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
