<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use Illuminate\Http\Request;

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


//test lien ket 
Route::get('testHasOne',function(){
    // $product = Product::where('id',5)->get()->toArray();
    // $typeID = Product::where('id',5)->select('type_id')->get()->toArray();
    // $
    // var_dump($typeIDproduct);
    // var_dump($typeIDproduct->type_name);
    // var_dump($product);
    // $product =Product::find(6)->get()->toArray();
    // echo "<pre>";
    // foreach ($typeIDproduct as $key) {
    //     var_dump($typeIDproduct);
    // }
    // var_dump($product);
   // echo "</pre>";
});

//tim kiem product
Route::post('/search','ProductController@searchProduct');

//Auth router
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//admin route
Route::get('/admin/{action?}','AdminController@index');
Route::post('/admin/UploadProduct','AdminController@UploadProduct');
Route::post('/admin/UploadImageProduct','AdminController@UploadImageProduct');



Route::get('shop-single-product/{id?}',[
'as'=>'detailProduct',
'uses'=>'ProductController@getDetailProductByID']
);

//AdminController - product
Route::get('/admin/product/{action?}/{id?}','AdminController@ProductAction');
Route::get('/admin/{action?}','AdminController@index');
Route::post('/admin/UploadProduct','AdminController@UploadProduct');
Route::post('/admin/EditProduct','AdminController@EditProduct');
Route::get('/product/delete/{id}','AdminController@DeleteProduct');
//BillController
Route::get('/bill/paid', 'BillController@paid');
Route::get('/bill/unpaid', 'BillController@unpaid');
//ReportController
Route::get('/report/bestsale', 'ReportController@bestsale');
Route::get('/report/bestview', 'ReportController@bestview');
Route::get('/report/sales', 'ReportController@sales');

Route::get('/','ProductController@getAllProductPaginate');
Route::get('/detailProduct/{id}','ProductController@getDetailProductByID');


