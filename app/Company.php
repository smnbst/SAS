<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = ['name','rnc','stress','phone','phone2','address','country','city','state','zipcode','website','logo'];
}
