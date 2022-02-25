<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participe extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'program_id',
        'user_id',
        'date_participe',
    ];

    
    public function program()
    {
        //return $this->hasMany(Produit::class);
        
        return $this->belongsTo('App\Models\Program');
        
    }

    public function user()
    {
        //return $this->hasMany(Produit::class);
        
        return $this->belongsTo('App\Models\User');
        
    }

}
