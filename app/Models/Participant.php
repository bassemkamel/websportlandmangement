<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Participant as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Participant  extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
         'nom_participant',
         'prenom_participant',
        'tel_participant',
        'country_participant',
        'ville_participant',
        'gender_participant',
        'image_participant',
        'image_couverture_participant',
         'email_participant',
        // 'password_participant',
        'date_naissance_participant',
        'tel_participant',
        'poids_participant',
        'etat_participant',
        'etat',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password_participant',
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
        return $this->belongsTo('App\User');
    }
    public function organisateurs(){
        return $this->hasMany('App\Organisateur');
    }
}
