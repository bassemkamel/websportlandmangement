<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;


    protected $fillable = [
        'mode_paiement',
         'montant',
         'user_id',
        'program_id',

        
    ];
    public function program()
    {
        //return $this->hasMany(Produit::class);
        
        return $this->belongsTo('App\Models\Program');
        
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
