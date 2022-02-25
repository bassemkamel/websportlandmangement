<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;



    protected $fillable = [
        
        'nom_program',
        'nombre_seance',
        'prix_seance',
        'program_date_debut',
        'program_date_fin',

        'sport_id',
        'location_id',
        'user_id',
        'etat',
        'monday',
        'monday_debut_seance',
        'monday_fin_seance',
        'tuesday',
        'tuesday_debut_seance',
        'tuesday_fin_seance',
        'wednesday',
        'wednesday_debut_seance',
        'wednesday_fin_seance',
        'thursday',
        'thursday_debut_seance',
        'thursday_fin_seance',
        'friday',
        'friday_debut_seance',
        'friday_fin_seance',
        'saturday',
        'saturday_debut_seance',
        'saturday_fin_seance',
        'sunday',
        'sunday_debut_seance',
        'sunday_fin_seance',
       ];


       
       public function sport()
       {
           //return $this->hasMany(Produit::class);
           
           return $this->belongsTo('App\Models\Sport');
           
       }
       public function location()
       {
           //return $this->hasMany(Produit::class);
           
           return $this->belongsTo('App\Models\Location');
           
       }
       public function user()
       {
           //return $this->hasMany(Produit::class);
           
           return $this->belongsTo('App\Models\User');
           
       }


       public function seance()
       {
           //return $this->hasMany(Produit::class);
           
           return $this->hasMany('App\Models\Seance');
           
       }

       public function participe()
       {
           //return $this->hasMany(Produit::class);
           
           return $this->hasMany('App\Models\Participe');
           
       }
}
