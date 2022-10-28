<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Partner extends Authenticatable
{
    use HasFactory;
    // protected $fillable = [
    //     'name',
    //     'usertype',
    //     'location',
    //     'organization',
    //     'sdg',
    //     'email',
    //     'description',
    //     'principles',
    //     'strategy',
    //     'experience',
    //     'projects',
    //     'password'
    // ];
}
