<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['description','dimension','location','air','camara','projector','internet','computer'];
}
