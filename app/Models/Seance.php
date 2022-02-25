<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'date_seance_debut',
        'date_seance_fin',
        'debut_seance',
        'fin_seance',
        'program_id',
        'etat',

    ];

    
    public function program()
    {
        //return $this->hasMany(Produit::class);
        
        return $this->belongsTo('App\Models\Program');
        
    }

    public function presence()
    {
        //return $this->hasMany(Produit::class);
        
        return $this->hasMany('App\Models\Presence');
        
    }

}
