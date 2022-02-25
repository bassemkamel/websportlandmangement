<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;
use App\Models\User;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers=Trainer::all();
        // dd($trainers[0]->user);
        return view("backoffice.trainers.index",compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.trainers.create");

    
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
        $user->role_user = "trainer"; 
        $user->password = Hash::make($input['password']); 
        $user->save();
*/
        $user= User::create([
            'nom_user' => $input['nom_user'],
            'prenom_user' => $input['prenom_user'],
            'role_user' => 'Trainer',
            'email_user' => $input['email_user'],
            'password' => Hash::make($input['password']),
        ]);

         $trainer = new Trainer(); 
        $trainer->date_naissance_trainer = $input['date_naissance_trainer']; 
        $trainer->gender_trainer = $input['gender_trainer']; 
        $trainer->country_trainer= $input['country_trainer']; 
        $trainer->ville_trainer = $input['ville_trainer']; 
        $trainer->image_trainer = "avatar.png";
        $trainer->image_couverture_trainer='couverture.png';
        $trainer->tel_trainer = $input['tel_trainer']; 
        $trainer->fee_trainer = $input['fee_trainer']; 
        
        $trainer->user_id = $user->id; 
        //dd($trainer);
        $trainer->save();
        Session::put('trainer', $trainer);

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
    public function edit(Trainer $trainer)    {
        return view("backoffice.trainers.edit",compact("trainer"));
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
        $request->validate(['date_naissance_trainer'=>'required']);
        $request->validate(['gender_trainer'=>'required']);
        $request->validate(['country_trainer'=>'required']);
        $request->validate(['ville_trainer'=>'required']);
        $request->validate(['tel_trainer'=>'required']);
        $request->validate(['fee_trainer'=>'required']);
        // dd($request);




        $trainer = Trainer::find($id); 
        // dd($trainer); 
        $trainer->date_naissance_trainer = $request['date_naissance_trainer']; 
        $trainer->gender_trainer = $request['gender_trainer']; 
        $trainer->country_trainer = $request['country_trainer']; 
        $trainer->ville_trainer = $request['ville_trainer']; 
        $trainer->tel_trainer = $request['tel_trainer']; 
        // dd($trainer);
        $trainer->save();
        $user = User::find($trainer->user_id); 
        // dd($user);
        $user->nom_user = $request['nom_user']; 
        $user->prenom_user= $request['prenom_user']; 
        $user->email_user = $request['email_user']; 
        $user->fee_trainer = $request['fee_trainer']; 
        
        // dd($user);
        $user->save();
        // dd($user);

        return redirect()->route('trainers.index')->with('success','Trainer has been updated successfully');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        $trainer->etat="disable";
        $trainer->save();
        return redirect()->route('trainers.index')->with('success','Trainer has been deleted successfully');
    }
}