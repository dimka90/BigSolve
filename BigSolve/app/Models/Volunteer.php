<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'nationality',
        'occupation',
        'skills',
        'sdg',
        'availability',
        'experience',
        'projects',
        'address',
        'why'
    ];
}
