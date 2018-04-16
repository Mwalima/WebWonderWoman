<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $table = "users";

    public $fillable = [
        'name', 'email', 'password','street','housenumber','city','password','created_at','updated_at',
    ];
}
