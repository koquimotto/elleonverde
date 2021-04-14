<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attached_file extends Model
{
    public function post()
    {
        return $this->belongsTo('Models\App\Post', 'id_post', 'id');
    }
    use HasFactory;
}
