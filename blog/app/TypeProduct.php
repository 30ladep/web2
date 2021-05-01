<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $table='type_products';
    protected $fillable=['id','type_name','manu_id'];
    public $timestamps=false;

}
