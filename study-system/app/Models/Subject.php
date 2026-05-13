<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Study;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function studies()
    {
        return $this->hasMany(Study::class);
    }
}