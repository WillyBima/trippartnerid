<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['headerapi']], function(){

Route::post('/login','ApiController@login');
Route::post('/post/tracking','ApiController@add_tracking');
Route::post('/post/pemesanan','ApiController@add_data_pemesanan');
Route::post('/post/comment','ApiController@add_data_comment');
Route::post('/post/register','ApiController@register');
Route::get('/get/data-supir', 'ApiController@data_supir');
Route::get('/get/data-bus', 'ApiController@data_bus');
Route::get('/get/data-kota', 'ApiController@data_kota');
Route::get('/get/data-po', 'ApiController@data_po');
Route::get('/get/data-rute', 'ApiController@data_rute');
Route::post('/post/data-history-order', 'ApiController@data_history_order');
Route::get('/get/data-order', 'ApiController@data_order');
Route::get('/get/data-fasilitas-bus', 'ApiController@data_fasilitas_bus');
Route::get('/get/data-harga', 'ApiController@data_harga');
Route::get('/get/data-tracking', 'ApiController@data_tracking');
Route::get('/get/data-comment', 'ApiController@data_comment');
Route::get('/get/data-user', 'ApiController@data_user');
Route::post('/post/get_profile', 'ApiController@get_profile');
Route::post('/post/search_bus', 'ApiController@search_bus');
Route::post('/post/logintester', 'ApiController@logintester');
Route::post('/post/editprofil', 'ApiController@edit_profile');


});
