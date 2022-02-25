<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Authenticatable 
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use AuthenticableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nom_user',
        'prenom_user',
        'email_user',
        'role_user',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function trainer()
    {
        //return $this->hasMany(Produit::class);
        
        return $this->hasMany('App\Models\Trainer');
        
    }


    public function program(){
        return $this->hasMany('App\Models\Program');
    }


    
    public function client()
    {
        //return $this->hasMany(Produit::class);
        
        return $this->hasMany('App\Models\Client');
        
    }


    public function participe()
    {
        //return $this->hasMany(Produit::class);
        
        return $this->hasMany('App\Models\Participe');
        
    }


    public function presence()
    {
        //return $this->hasMany(Produit::class);
        
        return $this->hasMany('App\Models\Presence');
        
    }
}