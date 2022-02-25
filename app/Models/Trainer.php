<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'tel_trainer',
        'country_trainer',
        'ville_trainer',
        'gender_trainer',
        'image_trainer',
        // 'password_trainer',
        'date_naissance_trainer',
        'tel_trainer',
        'fee_trainer',
        'etat',

    ];



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password_trainer',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }


}
