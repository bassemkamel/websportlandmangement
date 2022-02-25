<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_location',
        'fees_location',
        'country_location',
        'ville_location',

        'sport_id',
        'etat',
    ];

    public function sport()
    {
        //return $this->belongsTo(Categorie::class);
        return $this-> belongsTo('App\Models\Sport');
        
    }
    public function program(){
        return $this->hasMany('App\Models\Program');
    }

}
