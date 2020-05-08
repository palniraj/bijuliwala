<?php

namespace App\Http\Controllers\Api;

use App\Service;
use App\SubService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{

     // public function __construct()
    // {
    //     $this->middleware('auth')->except('index');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Service::all();
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
            'name'=>'required',
            // 'description'=>'required',
            'cover_img.*'=>'required|image|minmes:jpeg,png,jpg,gif,svg|max:2048'
            // 'cover_img'=>'required|image'
        ]);

        //store in database
        $service = new Service();
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        // $service->cover_img = $request->input('cover_img');

        // check if file is present
        if($request->has('cover_img')) {

            //store file in disk
            $filePath = $request->file('cover_img')->store('services');
            //saving file in database
            $service->cover_img = $filePath;
        }



        $service->save();
        return response()->json([
            'message'=>'Message sent',
            'data'=> $service
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
        if(SubService::where('id', $id)->exists()){
            $serviceWithSubservice = SubService::where('service_id', $id)->get();
            return response($serviceWithSubservice, 200);
        }else{
            return response()->json([
                'message'=> "Clients Id Data Not Found!"
            ], 400);
        }
        // $serviceWithSubservice = DB::select('select * from sub_services where service_id = $id');
        // dd($serviceWithSubservice);
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

        if(Service::where('id', $id)->exists()){
            $cont = Service::find($id);
            $cont->delete();

            return response()->json([
                'message'=> "Service is Deleted!"
            ], 202);
        }else{
            return response()->json([
                'message'=>"Service id Not Found!"
            ], 404);

        }

    }
}
