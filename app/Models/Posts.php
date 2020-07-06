<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'id_user',
        'title',
        'description',
        'img_url',
    ];
}
