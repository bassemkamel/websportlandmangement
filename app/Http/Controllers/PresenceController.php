<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use App\Models\Participe;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class PresenceController extends Controller
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
        //
    }

    public function storet(Request $request)
    {

        DB::table('presences')->where('seance_id', $request->id)->delete();

        if($request->presences!="")
        {
            $presences = explode(",", $request->presences);
            $personnes = explode(",", $request->personnes);
            // return Response::json(['success' =>$presences[0] ]);    
        for ($i = 0; $i < sizeof($presences); $i++){ 
            $presence = new Presence();
            $presence->seance_id = $request->id;
            $presence->user_id = $personnes[$i];
            // dd($request->etat.$request->id);
            $presence->etat = $presences[$i];
            // return Response::json(['success' =>$request->id ]);    
            // $presence->date_presence = date("Y-m-d");
            // return Response::json(['success' =>$presence->date_presence ]);    
            $presence->save();
        }
    }

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Presence  $presence
     * @return \Illuminate\Http\Response
     */
    public function show(Presence $presence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Presence  $presence
     * @return \Illuminate\Http\Response
     */
    public function edit(Presence $presence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Presence  $presence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presence $presence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presence  $presence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presence $presence)
    {
        //
    }


    public function presencegetclient(Request $request)
    {
    $clients = collect();
    $clientsall=Client::all();
    $clientsall = Client::join('participes', 'participes.user_id', '=', 'clients.id')
    ->join('programs', 'programs.id', '=', 'participes.program_id')
    ->join('seances', 'seances.program_id', '=', 'programs.id')
    ->where('seances.id','like', '%'.$request->id.'%')
    ->get(['clients.id AS client_id','clients.*']);

    $presences=Presence::all();
    foreach ($clientsall as $client)
    {
        $client->check = 0;
        foreach ($presences as $presence){
        if($request->id==$presence->seance_id&&Str::contains($client->id,$presence->user_id)) 
        $client->check = $presence->etat;
        }
        $clients->push($client);

    }
    // dd($clients);
    return view("backoffice.presences.index",compact('clients'));
    }
}
