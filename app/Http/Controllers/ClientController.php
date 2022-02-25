<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seance;
use App\Models\User;

use App\Models\Program;
use App\Models\Participe;
use App\Models\Presence;
use App\Models\Paiement;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $clients=Client::all();


        foreach ($clients as $client){


        $myPrograms=Program::join('participes', 'participes.program_id', '=', 'programs.id')
        ->where('participes.user_id', '=', $client->user_id)
        ->get();
        // dd( $programs);
        $programs=Program::all();

        $totalPaymentAllPrograms=0;
        $totalCostedAll=0;
        $totalpaiement=0;



        foreach ($programs as $program){
            if(!$myPrograms->contains($program)){
            // dd($program);
        $paiements=Paiement::where("user_id",$client->user_id)
        ->where("program_id",$program->id)
        ->get();





        // dd($paiements);
        $totalProgram=Seance::where("program_id",$program->id)->count();
        $totalCosted=Presence::join('seances', 'seances.id', '=', 'presences.seance_id')
        ->join('programs', 'programs.id', '=', 'seances.program_id')
        ->where("programs.id",$program->id)
        ->where("presences.user_id",$client->user_id)
        ->where("presences.etat","<>",0)
        ->count();






        // dd($totalCosted);
        $client_id=$client->user_id;
        $program_id=$program->id;





        $payments=Paiement::where("user_id",$client->user_id)
        ->where("program_id",$program->id)
        ->get();




        $totalPayment=0;
        foreach ($payments as $payment){
            $totalPayment=$totalPayment+$payment->montant;
            // dd($totalPayment);
        }




        $totalpaiement=$totalpaiement+$totalPayment;
        $totalProgram=$totalProgram*$program->prix_seance;
        $totalCosted=$totalCosted*$program->prix_seance;

        $totalCostedAll=$totalCostedAll+$totalCosted;

        $totalPaymentAllPrograms=$totalPaymentAllPrograms+$program->nombre_seance;
        // if($program->id==3&&$program->user_id==1)
        // dd($program->nombre_seance);
    }
}
    $client->totalPaymentAllPrograms=$totalPaymentAllPrograms;
    $client->totalCostedAll=$totalCostedAll;
    $client->totalpaiement=$totalpaiement;
    
        }

        // dd($clients[0]->user);
        return view("backoffice.clients.index",compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.clients.create");

    
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(array $input)
    {
         //dd($input);
        //  dd($input);

        Validator::make($input, [
            'nom_user' => ['required', 'string', 'max:255'],
            'prenom_user' => ['required', 'string', 'max:255'],
            'email_user' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();
        /*$nextid = DB::select("SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'users'");
        dd($nextid[0]);    */


      /*  $user = new User(); 
        $user->nom_user = $input['nom_user']; 
        $user->prenom_user = $input['prenom_user']; 
        $user->email_user = $input['email_user']; 
        $user->role_user = "client"; 
        $user->password = Hash::make($input['password']); 
        $user->save();
*/
        $user= User::create([
            'nom_user' => $input['nom_user'],
            'prenom_user' => $input['prenom_user'],
            'role_user' => 'Client',
            'email_user' => $input['email_user'],
            'password' => Hash::make($input['password']),
        ]);

         $client = new Client(); 
        $client->date_naissance_client = $input['date_naissance_client']; 
        $client->gender_client = $input['gender_client']; 
        $client->country_client= $input['country_client']; 
        $client->ville_client = $input['ville_client']; 
        $client->image_client = "avatar.png";
        $client->image_couverture_client='couverture.png';
        $client->tel_client = $input['tel_client']; 
        
        $client->user_id = $user->id; 
        //dd($client);
        $client->save();
        Session::put('client', $client);

return $user;
    
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
    public function edit(Client $client)    {
        return view("backoffice.clients.edit",compact("client"));
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
        // dd($request);
        $request->validate(['nom_user'=>'required']);
        $request->validate(['prenom_user'=>'required']);
        $request->validate(['email_user'=>'required', 'string', 'email', 'max:255', 'unique:users']);
        $request->validate(['date_naissance_client'=>'required']);
        $request->validate(['gender_client'=>'required']);
        $request->validate(['country_client'=>'required']);
        $request->validate(['ville_client'=>'required']);
        $request->validate(['tel_client'=>'required']);
        // dd($request);




        $client = Client::find($id); 
        // dd($client); 
        $client->date_naissance_client = $request['date_naissance_client']; 
        $client->gender_client = $request['gender_client']; 
        $client->country_client = $request['country_client']; 
        $client->ville_client = $request['ville_client']; 
        $client->tel_client = $request['tel_client']; 
        // dd($client);
        $client->save();
        $user = User::find($client->user_id); 
        // dd($user);
        $user->nom_user = $request['nom_user']; 
        $user->prenom_user= $request['prenom_user']; 
        $user->email_user = $request['email_user']; 
        
        // dd($user);
        $user->save();
        // dd($user);

        return redirect()->route('clients.index')->with('success','Client has been updated successfully');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->etat="disable";
        $client->save();
        return redirect()->route('clients.index')->with('success','Client has been deleted successfully');
    }

    public function paiementsgetclientallprograms(Request $request)
    {
        $programs=Program::all();
        $totalPayment=0;
        $totalPaymentAll=0;
        $totalCostedAll=0;
        
        foreach ($programs as $program){
        $paiements=Paiement::where("user_id",$request->id)
        ->where("program_id",$program->id)
        ->get();
        // dd($paiements);
        $totalProgram=Seance::where("program_id",$program->id)->count();
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
        foreach ($payments as $payment){
            $totalPayment=$totalPayment+$payment->montant;
            
        }

        $totalProgram=$totalProgram*$program->prix_seance;
        $totalCosted=$totalCosted*$program->prix_seance;
        
        $totalCostedAll=$totalCostedAll+$totalCosted;

        $totalPaymentAll=$totalPaymentAll+$totalProgram;
    }
        
        // dd($totalCostedAll);
        return view("backoffice.paiements.paiementsallprograms",compact('paiements','totalProgram','totalCostedAll','totalPaymentAll','client_id','program_id'));


    }



}