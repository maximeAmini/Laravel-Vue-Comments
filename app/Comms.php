<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comms extends Model
{
    public $fillable = ['user','content'];
}
