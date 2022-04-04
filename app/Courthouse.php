<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courthouse extends Model
{
    public $fillable = [
        'name',
        'map_link',
        'email'
    ];
}
