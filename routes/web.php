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

Route::get('/login', 'AdminController@login');
Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/additems', 'AdminController@addItems');
Route::get('/addcategory', 'AdminController@addcategory');
Route::get('/salesdaily', 'AdminController@salesdaily');
Route::get('/salesweekly', 'AdminController@salesweekly');
Route::get('/cashbook', 'AdminController@cashbook');
Route::get('/solditems', 'AdminController@solditems');
Route::get('/allitems', 'AdminController@allitems');
