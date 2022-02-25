<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'etat',
        'seance_id',
        'user_id',

    ];

    
    public function seance()
    {
        //return $this->hasMany(Produit::class);
        
        return $this->belongsTo('App\Models\Seance');
        
    }



        
    public function user()
    {
        //return $this->hasMany(Produit::class);
        
        return $this->belongsTo('App\Models\User');
        
    }





}
