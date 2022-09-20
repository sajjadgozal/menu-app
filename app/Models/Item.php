<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'menu_id',
    ];

    protected $hidden = [
        'id',
        'menu_id',
        'created_at',
        'updated_at',
        'pivot',
        'category_id',
    ];

    public function menu()
    {
        return $this->belongsToMany(Menu::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
