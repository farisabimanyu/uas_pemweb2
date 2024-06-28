<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number'
    ];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
