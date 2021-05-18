<?php

use Illuminate\Support\Facades\Route;
use App\Product;
use Illuminate\Http\Request;
use App\DetailBill;

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

Route::get('testdec',function(){
   $cart = Cart::content(); 
  
  // $rowId = $cart[0];
  
   foreach ($cart as $key=>$value) {
      echo "<pre>";
      print_r($value);
      echo "</pre>";
   }
 
   //Cart::update($rowId, 0); // Will update the quantity
});

Route::get('add-cart/{id}',['as'=>'add-cart','uses'=>'CartController@addCart']);
Route::get('cart',['as'=>'cart','uses'=>'CartController@cart']);
//decrement quality 
Route::get('de-quality/{rowID}',['as'=>'de-quality','uses'=>'CartController@deQuality']);
//incremnet quality
Route::get('in-quality/{rowID}',['as'=>'in-quality','uses'=>'CartController@inQuality']);
//delete item
Route::get('delete-item/{rowID}',['as'=>'delete-item','uses'=>'CartController@deleteItem']);

//test cart
// Route::get('add-cart/{id}',['as'=>'cart',function($id){
//    // echo "dmcs";
//    $detailBill = New DetailBill();
//    $productByID = Product::where('id',$id)->first();
//    $isCheckItem = DetailBill::find();
//   // $productByID = DB::table('products')->where('id',$id)->first();
//    Cart::add(array('id'=>$id,'name'=>$productByID->product_name,'qty'=>1,'price'=>$productByID->price,'weight'=>0,'options'=>array( 'image'=>$productByID->image,'sold'=>$productByID->sold,'hot'=>$productByID->hot,'note'=>$productByID->note,'create_date'=>$productByID->create_date)));
//    $detailBill->product_id = $id;
//    $detailBill->count_product = 1;
//    $detailBill->count_price = $productByID->price ;
//    $detailBill->save();

//    echo "<pre>";
//   // print_r(Cart::content());
//   print_r($detailBill);
//    echo "</pre>";
// }]);





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

//Auth router
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//admin route
Route::get('/admin/{action?}','AdminController@index');
Route::post('/admin/UploadProduct','AdminController@UploadProduct');
Route::post('/admin/UploadImageProduct','AdminController@UploadImageProduct');





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



