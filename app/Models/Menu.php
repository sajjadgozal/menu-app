<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'description',
        'image',
        'place_id'
    ];

    protected $hidden = [
        'id',
        'place_id',
    ];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

}
