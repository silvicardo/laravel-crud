<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{

    public $timestamps = false;

    protected $fillable = ['name', 'creator','language', 'description'];

}
