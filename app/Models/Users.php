<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar_url',
    ];

    public function posts()
    {
        return $this->hasMany('App\Models\Posts', 'id', 'id_user');
    }
}
