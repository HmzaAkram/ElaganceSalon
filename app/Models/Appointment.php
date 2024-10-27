<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'free_time',
        'service',
        'barber'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
