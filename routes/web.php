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

/**Route::get('/vente', function () {
    return view('venteProduit');
});**/
Auth::routes();
Route::get('/',['uses'=>'ProduitController@index','as'=>'home']);
Route::get('/edit/{id}',"ProduitController@edit");
Route::get('/show/{id}',"ProduitController@show");
Route::get('/create',"ProduitController@create");
Route::post('/store',"ProduitController@store");
Route::post('/update/{id}',"ProduitController@update");
Route::get('/destroy/{id}',"ProduitController@destroy");






