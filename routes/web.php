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

// rotte pubblice (Nav iniziale)
Route::get('/','PublicController@index');
Route::get('races' , 'PublicController@indexR')->name('races');
Route::get('human', "PublicController@indexH")->name('human');
Route::get('dwarf', "PublicController@indexD")->name('dwarf');
Route::get('elf', "PublicController@indexE")->name('elf');
Route::get('gnome', "PublicController@indexG")->name('gnome');