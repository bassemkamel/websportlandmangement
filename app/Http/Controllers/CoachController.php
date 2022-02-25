<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachController extends Controller
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
    public function store(array $input)
    {
        // dd($input);

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
        $user->role_user = "participant"; 
        $user->password = Hash::make($input['password']); 
        $user->save();
*/
        $user= User::create([
            'nom_user' => $input['nom_user'],
            'prenom_user' => $input['prenom_user'],
            'role_user' => 'Participant',
            'email_user' => $input['email_user'],
            'password' => Hash::make($input['password']),
        ]);


        $participant = new Participant(); 
        
      
        
        $participant->nom_participant = $input['nom_user']; 
        $participant->prenom_participant = $input['prenom_user']; 
        $participant->email_participant = $input['email_user']; 
        $participant->date_naissance_participant = $input['date_naissance_participant']; 
        $participant->gender_participant = $input['gender_participant']; 
        $participant->country_participant= $input['country_participant']; 
        $participant->ville_participant = $input['ville_participant']; 
        $participant->poids_participant = $input['poids_participant'];
        $participant->image_participant = "avatar.png";

        $participant->image_couverture_participant='couverture.png';
        $participant->etat_participant = 1; 
        $participant->tel_participant = $input['tel_participant']; 
        $participant->etat_juge = 0; 
        $participant->etat_organisateur = 0; 
        $participant->etat_coach = 0; 
        $participant->user_id = $user->id; 
        //dd($participant);
        $participant->save();
        Session::put('participant', $participant);

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
