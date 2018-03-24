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

Route::get('/', function () {
    return view('login');
});


Route::post('/login','LoginController@login');

Route::get('/blank', function () {
    return view('blank');
});
// ==========================
Route::get('/item', function () {
    return view('item/item');
});
Route::get('/items', 'ItemController@getItems')->name('getItems');
Route::post('/items', 'ItemController@postItems')->name('postItem');
Route::get('/item/itemDetail/{item_id}', 'ItemController@getItemDetail');
Route::post('/edititem', 'ItemController@postEditItem')->name('postEditItem');
Route::get('newitem', 'ItemController@getAddItem')->name('getAddItem');
Route::post('newitem', 'ItemController@postAddItem')->name('postAddItem');
Route::get('additem', 'ItemController@getAddItem2')->name('getAddItem2');
Route::post('additem', 'ItemController@postAddItem2')->name('postAddItem2');
// Route::get('newitem', function () {
//     return view('item/itemDetail');
// });

// ===================
Route::get('partner','PartnerController@show');

Route::get('partner_edit/{id}/edit','PartnerController@edit');

Route::post('partner_update/{id}','PartnerController@update');

Route::get('partner_insert/create','PartnerController@create');

Route::post('partner_store/store','PartnerController@store');

// ============================