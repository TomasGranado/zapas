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
Auth::routes();
Route::get('/', function () {
    return view('index');
});


// Route::post('/crudProduct', function(){
//     return view('crudProduct');
// });

Route::get('/crudProduct', function(){

    return view('crudProduct');

});


Route::post('/crudProduct', 'ProductsController@create');


Route::get('/home', 'HomeController@index')->name('home');
 
//Rutas Productos
Route::get('/products','ProductsController@indexProducts')->name('products');

Route::get('/agregarCarrito/{id}','ProductsController@addCart')->name('addCart');


Route::get('/product/{product}','ProductsController@show')->name('product.show');


Route::post('/crudProduct', 'ProductsController@create');

Route::get('/cart','ProductsController@indexCart');


Route::get('/agregarCarrito/{id}','ProductsController@addCart')->name('addCart');

Route::get('/comprar','ProductsController@purchase')->name('purchase');



