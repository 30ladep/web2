<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    protected $table='manufactures';
    protected $fillable=['id','manu_name'];
    public $timestamps=false;
}
