<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use App\Models\User;

use App\Models\Program;
use App\Models\Participe;
use App\Models\Presence;
use App\Models\Paiement;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PaiementController extends Controller
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
    public function create(Request $request)
    {
        // dd($request->client_id);
        $client_id=$request->client_id;
        $program_id=$request->program_id;
        return view("backoffice.paiements.create",compact('client_id','program_id'));

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

            // dd($request->client_id);
            $paiement = new Paiement();
            $paiement->program_id = $request->program_id;
            $paiement->user_id = $request->client_id;
            $paiement->montant = $request->montant;
            $paiement->mode_paiement = $request->mode_paiement;
            // return Response::json(['success' =>$paiement->date_paiement ]);    
            $paiement->save();
            $client_id=$request->client_id;
            $program_id=$request->program_id;
            // dd($client_id);
            return Redirect::to('../../paiementsgetclient/'.$client_id.'/'.$program_id.'');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function show(Paiement $paiement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function edit(Paiement $paiement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paiement $paiement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paiement $paiement)
    {
        //
    }

    public function paiementsgetallclient(Request $request)
    {
        $clients = collect();
        $clientsall=Client::all();
        foreach ($clientsall as $client){
            $participes=Participe::where("program_id",$request->id)->count();
            if($participes!=0)
            $clients->push($client);
        }
        $program = $request->id;

        // dd($clients);
        return view("backoffice.paiements.index",compact('clients','program'));


    }


    public function paiementsgetclient(Request $request)
    {
        $paiements=Paiement::where("user_id",$request->id)
        ->where("program_id",$request->program_id)
        ->get();
        // dd($paiements);
        $program=Program::where("id",$request->program_id)->first();
        $totalProgram=Seance::where("program_id",$request->program_id)->count();
        $totalCosted=Presence::join('seances', 'seances.id', '=', 'presences.seance_id')
        ->join('programs', 'programs.id', '=', 'seances.program_id')
        ->where("programs.id",$request->program_id)
        ->where("presences.user_id",$request->id)
        ->where("presences.etat","<>",0)
        ->count();
        // dd($totalCosted);
        $client_id=$request->id;
        $program_id=$request->program_id;

        $payments=Paiement::where("user_id",$request->id)
        ->where("program_id",$request->program_id)
        ->get();
        $totalPayment=0;
        foreach ($payments as $payment){
            $totalPayment=$totalPayment+$payment->montant;
            
        }

        $totalProgram=$totalProgram*$program->prix_seance;
        $totalCosted=$totalCosted*$program->prix_seance;
        
        // dd($paiements);
        return view("backoffice.paiements.paiements",compact('paiements','totalProgram','totalCosted','totalPayment','client_id','program_id'));


    }
    



    public function paiementsprogrmasgetclient(Request $request)
    {

        // dd($paiements);

        $programs=Program::all();
        foreach ($programs as $program){

        $totalProgram=Seance::where("program_id",$program->id)->count();
        // dd($totalProgram);
        $totalCosted=Presence::join('seances', 'seances.id', '=', 'presences.seance_id')
        ->join('programs', 'programs.id', '=', 'seances.program_id')
        ->where("programs.id",$program->id)
        ->where("presences.user_id",$request->id)
        ->where("presences.etat","<>",0)
        ->count();
        // dd($totalCosted);
        $client_id=$request->id;
        $program_id=$program->id;

        $payments=Paiement::where("user_id",$request->id)
        ->where("program_id",$program->id)
        ->get();
        $totalPayment=0;
        foreach ($payments as $payment){
            $totalPayment=$totalPayment+$payment->montant;
            
        }
        // dd($program->prix_seance);
        $program->totalPayment=$totalPayment;
        $program->$totalProgram=$totalProgram*$program->prix_seance;
        $program->$totalCosted=$totalCosted*$program->prix_seance;
        // dd($totalProgram*$program->prix_seance);
    }
    dd($programs[3]->totalProgram);
        // dd($paiements);
        return view("backoffice.paiements.paiements",compact('paiements','totalProgram','totalCosted','totalPayment','client_id','program_id'));


    }






}