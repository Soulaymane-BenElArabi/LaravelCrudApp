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

Route::get('/', 'App\Http\Controllers\SiteController@chartjs');

Route::get('/Ensaj', 'App\Http\Controllers\SiteController@index');

Route::get('/Classes', 'App\Http\Controllers\ClasseController@afficClasses');
Route::post('/Classes', 'App\Http\Controllers\ClasseController@storeClasses');

Route::get('/CF',  'App\Http\Controllers\cfController@afficFil');
Route::post('/CF',  'App\Http\Controllers\cfController@lookFor');


Route::get('/Filieres', 'App\Http\Controllers\FiliereController@afficFilieres');
Route::post('/Filieres', 'App\Http\Controllers\FiliereController@storeFilieres');

//Route::get('/Etudiants', 'App\Http\Controllers\EtudiantController@show');
//Route::post('/Etudiants', 'App\Http\Controllers\EtudiantController@store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});