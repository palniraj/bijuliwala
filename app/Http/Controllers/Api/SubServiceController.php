<?php

namespace App\Http\Controllers\Api;

use App\Detail;
use App\Service;
use App\SubService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $subserviceWithService = Service::latest();

        // return view('subservice.index', ['services'=> $subserviceWithService]);

        return SubService::all();
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
            'service_id'=>'required',
            'name'=>'required',
            // 'description'=>'required',
            // 'price'=>'required',
            'cover_img.*'=>'required|image|minmes:jpeg,png,jpg,gif,svg|max:2048'
            // 'cover_img'=>'required|image'

        ]);

        //store in database
        $subservice = new SubService();
        $subservice->service_id = $request->input('service_id');
        $subservice->name = $request->input('name');
        $subservice->description = $request->input('description');
        $subservice->price = $request->input('price');
        // $subservice->cover_img = $request->input('cover_img');

 // check if file is present
 if($request->has('cover_img')) {

    //store file in disk
    $filePath = $request->file('cover_img')->store('services');
    //saving file in database
    $subservice->cover_img = $filePath;
}

        $subservice->save();
        return response()->json([
            'message'=>'Message sent',
            'data'=> $subservice
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
        if(Detail::where('id', $id)->exists()){
            $SubserviceWithDetail = Detail::where('sub_service_id', $id)->get();
            return response($SubserviceWithDetail, 200);
        }else{
            return response()->json([
                'message'=> "Clients Id Data Not Found!"
            ], 400);
        }
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

        if(SubService::where('id', $id)->exists()){
            $cont = SubService::find($id);
            $cont->delete();

            return response()->json([
                'message'=> "SubService is Deleted!"
            ], 202);
        }else{
            return response()->json([
                'message'=>"SubService id Not Found!"
            ], 404);

        }

    }
}
