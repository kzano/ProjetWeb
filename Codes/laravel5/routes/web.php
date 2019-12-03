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

Route::get('/boncoloc/inscription', 'inscriptionController@getPage');

Route::post('/boncoloc/inscription', 'inscriptionController@ajout');

Route::get('/boncoloc', 'pageConnexion@getPage');

Route::post('/boncoloc', 'pageConnexion@aldo');

Route::post('/verif', 'connexionController@postConnexion');

Route::get('/boncoloc/accueil', 'accueilController@getPage');

Route::get('/boncoloc/notconnect', 'pageConnexion@getPagePbConnexion');

Route::get('/boncoloc/disconnect', 'decoController@controleDisconnect');

Route::get('/boncoloc/inscription', 'inscriptionController@getPage');

Route::get('/', function () {
    return view('welcome');
});
