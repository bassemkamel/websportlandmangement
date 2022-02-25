<?php

namespace App\Http\Controllers;

use App\Models\Participe;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ParticipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return Response::json(['success' => 'hi, atiq']);    
    }
    public function storet(Request $request)
    {

        DB::table('participes')->where('program_id', $request->id)->delete();

        if($request->participes!="")
        {
        $participes = explode(",", $request->participes);
        // return Response::json(['success' =>$participes[0] ]);    
        foreach ($participes as $participeobject){ 
            $participe = new Participe();
            $participe->program_id = $request->id;
            $participe->user_id = $participeobject;
            // return Response::json(['success' =>$request->id ]);    
            $participe->date_participe = date("Y-m-d");
            // return Response::json(['success' =>$participe->date_participe ]);    
            $participe->save();
        }
    }

    //    return Response::json(['success' =>$request->participes ]);    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participe  $participe
     * @return \Illuminate\Http\Response
     */
    public function show(Participe $participe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participe  $participe
     * @return \Illuminate\Http\Response
     */
    public function edit(Participe $participe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participe  $participe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participe $participe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participe  $participe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participe $participe)
    {
        //
    }

    public function participesgetclient(Request $request)
    {
        $clients = collect();
        $clientsall=Client::all();
        $participes=Participe::all();
        foreach ($clientsall as $client){
            $client->check = 0;
            foreach ($participes as $participe){
            if($request->id==$participe->program_id&&Str::contains($client->id,$participe->user_id)) 
            $client->check = 1;
            }
            $clients->push($client);

        }
        // dd($clients);
        return view("backoffice.participes.index",compact('clients'));


    }
    
}