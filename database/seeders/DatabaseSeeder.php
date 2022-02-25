<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        DB::table('sports')->insert([
            'nom_sport' =>"football" ,
            'created_at' =>new \DateTime(),
            'updated_at' =>new \DateTime() ,
            
        ]);
    


        DB::table('users')->insert([
            'nom_user' =>"trainer" ,
            'prenom_user' =>"trainer" ,
            'role_user' =>"Trainer" ,
            'email_user' =>"trainer@gmail.com" ,
            'password' =>Hash::make("123456789") ,
            'created_at' =>new \DateTime(),
            'updated_at' =>new \DateTime() ,
            
        ]);




        DB::table('trainers')->insert([
            'tel_trainer' =>"45454554" ,
            'country_trainer' =>"tunisia" ,
            'ville_trainer' =>"sfax" ,
            'gender_trainer' =>"Homme" ,
            'image_trainer' =>"default" ,
            'image_couverture_trainer' =>"photo.jpg" ,
            'date_naissance_trainer' =>new \DateTime() ,
            'fee_trainer' =>"5" ,
            'user_id' =>1,
            'remember_token' =>"default" ,
            'created_at' =>new \DateTime(),
            'updated_at' =>new \DateTime() ,
            
        ]);





        DB::table('locations')->insert([
            'nom_location' =>"sfax" ,
            'fees_location' =>5,
            'sport_id' =>1 ,
            'country_location' =>"Tunisia",
            'ville_location' =>"Sfax" ,

            'created_at' =>new \DateTime(),
            'updated_at' =>new \DateTime() ,
            
        ]);
    




        DB::table('programs')->insert([
            'nom_program' =>"football children" ,
            'nombre_seance' =>1 ,
            'prix_seance' =>0 ,
            'program_date_debut' =>new \DateTime(),
            'program_date_fin' =>new \DateTime(),
            'sport_id' =>1 ,
            'location_id' =>1 ,
            'user_id' =>1 ,
            'created_at' =>new \DateTime(),
            'updated_at' =>new \DateTime() ,
            
        ]);


        

        DB::table('seances')->insert([
            'date_seance_debut' =>new \DateTime(),
            'date_seance_fin' =>new \DateTime(),
            'debut_seance' =>new \DateTime(),
            'fin_seance' =>new \DateTime(),
            'program_id' =>1,
            'created_at' =>new \DateTime(),
            'updated_at' =>new \DateTime() ,
            
        ]);


        DB::table('users')->insert([
            'nom_user' =>"client" ,
            'prenom_user' =>"client" ,
            'role_user' =>"Client" ,
            'email_user' =>"client@gmail.com" ,
            'password' =>Hash::make("123456789") ,
            'created_at' =>new \DateTime(),
            'updated_at' =>new \DateTime() ,
            
        ]);




        DB::table('clients')->insert([
            'tel_client' =>"45454554" ,
            'country_client' =>"tunisia" ,
            'ville_client' =>"sfax" ,
            'gender_client' =>"Homme" ,
            'image_client' =>"default" ,
            'image_couverture_client' =>"photo.jpg" ,
            'date_naissance_client' =>new \DateTime() ,
            'user_id' =>2,
            'remember_token' =>"default" ,
            'created_at' =>new \DateTime(),
            'updated_at' =>new \DateTime() ,
            
        ]);


   

        DB::table('users')->insert([
            'nom_user' =>"client2" ,
            'prenom_user' =>"client2" ,
            'role_user' =>"Client" ,
            'email_user' =>"client2@gmail.com" ,
            'password' =>Hash::make("123456789") ,
            'created_at' =>new \DateTime(),
            'updated_at' =>new \DateTime() ,
            
        ]);




        DB::table('clients')->insert([
            'tel_client' =>"45454554" ,
            'country_client' =>"tunisia" ,
            'ville_client' =>"sfax" ,
            'gender_client' =>"Homme" ,
            'image_client' =>"default" ,
            'image_couverture_client' =>"photo.jpg" ,
            'date_naissance_client' =>new \DateTime() ,
            'user_id' =>3,
            'remember_token' =>"default" ,
            'created_at' =>new \DateTime(),
            'updated_at' =>new \DateTime() ,
            
        ]);

    
    }
}