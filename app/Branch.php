<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
  protected $fillable = ['rnc','name','address','city','state','country','zipcode','phone','phone2'];
}
