<?php

use Illuminate\Support\Facades\Route;
use App\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//AdminController
Route::get('/admin/product/{action?}/{id?}','AdminController@ProductAction');
Route::get('/admin/{action?}','AdminController@index');
Route::post('/admin/UploadProduct','AdminController@UploadProduct');

Route::get('/','ProductController@getAllProduct');
Route::get('detailProduct/{id?}','ProductController@getDetailProductByID');
//test detail route
// Route::get('allproducts/{id?}  ',function($id){
//     echo "dit me".$id;
//     $productsDetailByID = Product::get()->where('id',$id)->toArray();
//      echo "<pre>";
//     print_r($productsDetailByID);
//     echo "</pre>";
// });
//test 
// Route::get('allproducts',function(){
//     $data= Product::all()->toArray();
//     echo "<pre>";
//     foreach ($data as $key => $value) {
//         print_r($value);
//     }
  
//     echo "</pre>";
// });
//Route::get('products','HomeController@getAllProducts');
//Route::get('/{controller?}', 'HomeController@Index');

//Route::get('/', 'HomeController@Index');
// Route::get('/admin')->middleware("CheckAge");
// Route::get('/{controller?}/{id?}', 'WellcomeController@Index');
// Route::get('/gioithieu', 'WellcomeController@GioiThieu');
// Route::get('/lienhe', 'WellcomeController@LienHe');
// Route::get('/sanpham/{product?}', 'WellcomeController@SanPham');