<?php

namespace App\Http\Controllers;

use App\Service;
use App\SubService;
use Illuminate\Http\Request;

class SubServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $subservices = SubService::where('service_id', '!=', '0', 'cover_img');
        // return view('subservice.index', ['services'=> $subservices]);

        $subservice = SubService::all();
        return view('subservice.index', compact('subservice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allServices = Service::all();
        // $allServices = Service::all()->pluck('name','id');
        return view('subservice.create',compact('allServices'));
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
            $filePath = $request->file('cover_img')->store('subservices');
            //saving file in database
            $subservice->cover_img = $filePath;
        }

        $subservice->save();
        // dd($subservice);
        return back()->withMessage('Data are saved!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function show(SubService $subService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function edit(SubService $subService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubService $subService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubService $subService)
    {
        //
    }
}
