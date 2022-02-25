<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Trainer;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Actions\RouteServiceProvider;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        //  dd($input);
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

        $role=Session::get('role');


        $user= User::create([
            'nom_user' => $input['nom_user'],
            'prenom_user' => $input['prenom_user'],
            'role_user' => $role,
            'email_user' => $input['email_user'],
            'password' => Hash::make($input['password']),
        ]);

        //  dd($input);
        if($role=="Trainer")
       {
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
        // dd($trainer);
        $trainer->save();
        Session::put('trainer', $trainer);
        }
        if($role=="Client")
        {

        $client = new Client(); 
        $client->date_naissance_client = $input['date_naissance_client']; 
        $client->gender_client = $input['gender_client']; 
        $client->country_client= $input['country_client']; 
        $client->ville_client = $input['ville_client']; 
        $client->image_client = "avatar.png";
        $client->image_couverture_client='couverture.png';
        $client->tel_client = $input['tel_client']; 
        $client->user_id = $user->id; 
        // dd($client);
        $client->save();
        Session::put('client', $client);

        }

return $user;

    
}
}