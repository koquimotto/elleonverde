<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class);
        // return $this->belongsToMany('App\Models\Post');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    use HasFactory;
}
