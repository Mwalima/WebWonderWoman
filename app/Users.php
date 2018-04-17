<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $table = "users";

    protected $fillable = [
        'name', 'lastname','email', 'country','street','housenumber','city','password','created_at','updated_at',
    ];
}
