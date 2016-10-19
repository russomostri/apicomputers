<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Monitor;
class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitors = Monitor::all();
        if($monitors){
            return response()->json(["Status" => "ok" , "data" => $monitors], 200);
        }else{
            return response()->json(["Status" => "No content"], 204);
        }

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
        $monitor = new Monitor();
        $monitor->size = $request->size;
        $monitor->outputs = $request->outputs;
        $monitor->code = $request->code;

        if($monitor->save()){
            return response()->json(["Status" => "created"], 201);
        }else{
            return response()->json(["Status" => "Internal Error"], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monitor = Monitor::find($id);

        if($monitor){
            return response()->json(["Status" => "Ok", "data" => $monitor], 200);
        }else{
            return response()->json(["Status" => "Not content"], 204);
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
        $monitor = Monitor::find($id);
        $monitor->size = $request->size;
        $monitor->outputs = $request->outputs;
        $monitor->code = $request->code;

        if($monitor->save()){
            return response()->json(["Status" => "Ok"], 200);
        }else{
            return response()->json(["Status" => "Error no save"], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monitor=Monitor::find($id);

        if($monitor->delete()){
            return response()->json(["Status" => "Ok"], 200);
        }else{
            return response()->json(["Status" => "Error no delete"], 200);
        }
    }

    public function addMonitorClient($monitor_id,$client_id){

        $monitor = Monitor::find($monitor_id);
        $client = Client::find($client_id);

        if($monitor && $client){
            $monitor->client_id = $client_id;
            
            if($monitor->save()){
                return response()->json(["Status" => "Ok"], 200);
            }else{
            
                return response()->json(["Status" => "Error no Save"], 200);
            }
        
        }

        else{
            return response()->json(["Status" => "No content"], 204);
        }    
        
    }
}
