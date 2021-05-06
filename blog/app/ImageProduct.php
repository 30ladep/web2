<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    protected $table='image_products';
    protected $fillable=['id','product_id','image'];
    public $timestamps=false;

    //
    
}
