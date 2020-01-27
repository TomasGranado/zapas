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
})->name('index');


Route::get('/crudProduct', function(){

    return view('crudProduct');

});


Route::post('/crudProduct', 'ProductsController@create');


Route::get('/crudProduct', function(){

    return view('crudProduct');

});


Route::post('/crudProduct', 'ProductsController@create');



Route::post('/agregarProducto', 'ProductsController@create')->name('newProduct');

Route::get('/listaProducto', 'ProductsController@listProducts')->name('crudProduct');

Route::get('/home', 'HomeController@index')->name('home');
 
//Rutas Productos
Route::get('/products','ProductsController@indexProducts')->name('products');

Route::get('/agregarCarrito/{id}','ProductsController@addCart')->name('addCart');


Route::get('/product/{product}','ProductsController@show')->name('product.show');


Route::get('/cart','ProductsController@indexCart');


Route::get('/agregarCarrito/{id}','ProductsController@addCart')->name('addCart');

Route::get('/filtrarPorTalle/{talle}','ProductsController@indexProductsTalle')->name('filter');

Route::get('/comprar','ProductsController@purchase')->name('purchase');



