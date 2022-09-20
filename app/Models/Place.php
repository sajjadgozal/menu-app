<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'image',
        'website',
        'latitude',
        'longitude',
        'user_id',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

}
