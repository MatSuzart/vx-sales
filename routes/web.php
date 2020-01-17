<?php

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
use App\Sales;
use App\Product;
Route::get('/', function(){
    return view('home');
});

Route::get('/home','SalesController@index');
Route::get('/sales','SalesController@create');
Route::post('/store','SalesController@store');

Route::get('/rel', function(){

    $sales = new Sales();

   echo "nome". $sales->product->name; 
   

  /*  $sales = Product::find(1)->name;

    echo "name". $sales;
    */
});