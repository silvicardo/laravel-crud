<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $fillable = ['name', 'lastname','age', 'date_of_birth', 'class','gender'];

}
