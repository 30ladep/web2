<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table='bills';
    protected $fillable=['id','price','create_date','status','image_check_out'];
    public $timestamps=false;
}

