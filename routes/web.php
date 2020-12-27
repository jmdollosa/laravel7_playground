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

Route::get( '/', 'LandingPageController@index' );


Route::get( 'contact', 'ContactsController@index' )->name( 'contact.index' );
Route::get( 'contact/create','ContactsController@create' )->name( 'contact.create' );
Route::get( 'contact/edit/{contact}', 'ContactsController@edit' )->name( 'contact.edit' );

Route::post( 'contact/create', 'ContactsController@store' )->name( 'contact.action.store' );
Route::post( 'contact/edit/{contact}', 'ContactsController@update' )->name( 'contact.action.update' );
