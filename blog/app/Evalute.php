<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evalute extends Model
{
    protected $table='evalutes';
    protected $fillable=['id','rate','comment','user_id'];
    public $timestamps=false;
}
