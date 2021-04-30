<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable =['product_name','image','price','size','hot','note','create_date','color','gender','type_id','manu_id'];
    public $timestamps=false;
}
