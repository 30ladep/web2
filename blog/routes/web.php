<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/trangchu', function () {
//     return view('trangchu');
// });
// Route::get('/gioithieu', function () {
//     return view('gioithieu');
// });
// Route::get('/lienhe', function () {
//     return view('lienhe');
// });
//Route::get('/', 'WellcomeController@Index');
Route::get('/{controller?}/{id?}', 'WellcomeController@Index');
// Route::get('/gioithieu', 'WellcomeController@GioiThieu');
// Route::get('/lienhe', 'WellcomeController@LienHe');
// Route::get('/sanpham/{product?}', 'WellcomeController@SanPham');