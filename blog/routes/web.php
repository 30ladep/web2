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
    // $product = App\Product::where('id',3)->Manufacture->manu_name;
    // var_dump($product);
    $product = App\Product::find(3)->first();
    var_dump($product->TypeProduct->type_name);
  
});

//authencation
Route::get('user/login',function(){
    return view('login');
});


//login
Route::get('user/login','UserController@getLogin');
Route::post('user/login','UserController@postLogin');

//logout
Route::get('user/logout','UserController@Logout');
//register
Route::group(['prefix'=>'user'],function(){
    Route::get('danhsach','UserController@layDanhSach');
    
    Route::get('sua/{id}','UserController@getSua');
    Route::post('sua/{id}','UserController@postSua');

    Route::get('them','UserController@getThem');
    Route::post('them','UserController@postThem');

    Route::get('xoa/{id}','UserController@getXoa');
});


//admin route
Route::get('/admin/{action?}','AdminController@index');
Route::post('/admin/UploadProduct','AdminController@UploadProduct');
Route::post('/admin/UploadImageProduct','AdminController@UploadImageProduct');


//user route
Route::get('allproducts','ProductController@getAllProduct');



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

Route::get('/','ProductController@getAllProduct');
Route::get('/detailProduct/{id}','ProductController@getDetailProductByID');
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