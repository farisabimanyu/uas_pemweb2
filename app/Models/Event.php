<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'description',
        'start_date',
        'end_date',
        'location_id'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
