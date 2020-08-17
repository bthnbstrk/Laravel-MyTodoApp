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

Route::get('/', function () {
    return view('welcome');
});


//Work Routes

Route::get('work', 'WorkController@index')->name('workGet');
//Work Insert
Route::get('workInsert', 'WorkController@workInsert')->name('workInsert');
Route::post('workInsertPost', 'WorkController@workInsertPost')->name('workInsertPost');
//Work Update
Route::get('workUpdate/{id}', 'WorkController@workUpdate')->name('workUpdate');
Route::post('workUpdatePost/{id}', 'WorkController@workUpdatePost')->name('workUpdatePost');
//Work Delete
Route::get('workDelete/{id}', 'WorkController@workDelete')->name('workDelete');


