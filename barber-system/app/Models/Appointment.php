<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
    'client_id',
    'date',
    'time',
    'service',
    'status',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}