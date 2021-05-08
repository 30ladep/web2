<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_images';
    protected $fillable=['id','product_id','image_product'];
    public $timestamps =false;

    //product
    public function Product(){
        return $this->belongsTo('App\Product','product_id','id');
    }
}
