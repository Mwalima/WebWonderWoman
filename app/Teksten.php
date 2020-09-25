<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teksten extends Model
{
    public $table = "teksten";

    protected $fillable = [
        'name', 'subject','message',
    ];
}
