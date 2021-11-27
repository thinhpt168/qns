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


Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function () { 
    Route::get('/', function () {
        return view('admin.layout.index');
    });

    Route::prefix('users')->group(function(){
        Route::get('/list', 'UserController@listUser')->name('listUsers');
        Route::get('/add', 'UserController@formAddUser')->name('formAddUser');
        Route::post('/add', 'UserController@addUser')->name('addUser');
        
    });
 });