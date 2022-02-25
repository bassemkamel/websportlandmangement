<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    protected $fillable = [
     'nom_sport',
     'etat',
    ];

    public function location()
    {
        //return $this->hasMany(Produit::class);
        
        return $this->hasMany('App\Models\Location');
        
    }
    public function program(){
        return $this->hasMany('App\Models\Program');
    }

}
