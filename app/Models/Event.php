<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public function events()
    {
        return $this->hasMany(Event::class, 'event_id', 'id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
