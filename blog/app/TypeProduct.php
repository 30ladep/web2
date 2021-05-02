<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $table='type_products';
    protected $fillable=['id','type_name','manu_id'];
    public $timestamps=false;

    //product
    public function Product(){
        return $this->hasMany(App\Product);
    }

    //manufacture
    public function Manufacture(){
        return $this->belongsTo(App\Manufacture);
    }
}
