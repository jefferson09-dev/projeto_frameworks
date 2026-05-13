<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $fillable = [
        'subject_id',
        'title',
        'description',
        'study_date',
        'study_time',
        'status',
        'minutes_studied'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}