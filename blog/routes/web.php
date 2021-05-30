<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use Illuminate\Http\Request;
use App\DetailBill;
use App\Role;




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
//test cart 



//product
Route::get('/','ProductController@getAllProductPaginate');
//chi tiet san pham
// Route::get('/detailProduct/{id}','ProductController@getDetailProductByID');
Route::get('shop-single-product/{id?}',[
   'as'=>'detailProduct',
   'uses'=>'ProductController@getDetailProductByID']
   );

//tim kiem product
Route::get('/search','ProductController@searchProduct');

//cart
Route::get('add-cart/{id}',['as'=>'add-cart','uses'=>'CartController@addCart']);
Route::get('cart',['as'=>'cart','uses'=>'CartController@cart']);
//decrement quality 
Route::get('de-quality/{rowID}',['as'=>'de-quality','uses'=>'CartController@deQuality']);
//incremnet quality
Route::get('in-quality/{rowID}',['as'=>'in-quality','uses'=>'CartController@inQuality']);
//delete item
Route::get('delete-item/{rowID}',['as'=>'delete-item','uses'=>'CartController@deleteItem']);

//test lien ket 
Route::get('/shop-cart',function(){
   return view('shop-cart');
});

//update cart
Route::get('/shop-update',function(){

});
//checkout 
Route::get('/shop-checkout',function(){
    return view('shop-checkout');
 });


//Auth router
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');


//admin route
// Route::get('/admin/{action?}','AdminController@index');
// Route::post('/admin/UploadProduct','AdminController@UploadProduct');
// Route::post('/admin/UploadImageProduct','AdminController@UploadImageProduct');




//AdminController - product
Route::resource('admins','Admin\AdminController')->middleware('CheckAdmin');
Route::resource('admin/products','Admin\ProductController');
Route::resource('admin/manufacuters','Admin\ManufactureController');
Route::resource('admin/typeproducts','Admin\TypeProductController');
Route::resource('admin/users','Admin\UserController');
Route::resource('admin/banners','Admin\BannerController');
// Route::get('/admin/product/{action?}/{id?}','AdminController@ProductAction');
// Route::get('/admin/{action?}','AdminController@index');
// Route::post('/admin/UploadProduct','AdminController@UploadProduct');
// Route::post('/admin/EditProduct','AdminController@EditProduct');
// Route::get('/product/delete/{id}','AdminController@DeleteProduct');
//BillController
// Route::get('/bill/paid', 'BillController@paid');
// Route::get('/bill/unpaid', 'BillController@unpaid');
// //ReportController
// Route::get('/report/bestsale', 'ReportController@bestsale');
// Route::get('/report/bestview', 'ReportController@bestview');
// Route::get('/report/sales', 'ReportController@sales');



