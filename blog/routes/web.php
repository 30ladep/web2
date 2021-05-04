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
Route::get('detail',function(){
    return view('shop-single-product');
});
//admin route
Route::get('/admin/{action?}','AdminController@index');
Route::post('/admin/UploadProduct','AdminController@UploadProduct');

//user route
Route::get('allproducts','ProductController@getAllProduct');

Route::get('detailproduct/{id?}',[
'as'=>'detailproduct',
'uses'=>'ProductController@getDetailProductByID']);

// Route::get('shop-single-product/{id?}',[
// 'as'=>'detailProduct',
// 'uses'=>'ProductController@getDetailProductByID']
// );

//Route::get('products','HomeController@getAllProducts');
//Route::get('/{controller?}', 'HomeController@Index');

Route::get('/', 'HomeController@Index');
// Route::get('/admin')->middleware("CheckAge");
// Route::get('/{controller?}/{id?}', 'WellcomeController@Index');
// Route::get('/gioithieu', 'WellcomeController@GioiThieu');
// Route::get('/lienhe', 'WellcomeController@LienHe');
// Route::get('/sanpham/{product?}', 'WellcomeController@SanPham');