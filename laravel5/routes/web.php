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

Route::post('/boncoloc/annonce', 'annonceController@getPage');

Route::get('/boncoloc/inscription', 'inscriptionController@getPage');

Route::post('/boncoloc/inscription', 'inscriptionController@ajout');

Route::get('/boncoloc', 'pageConnexion@getPage');

Route::post('/boncoloc', 'pageConnexion@aldo');

Route::post('/verif', 'connexionController@postConnexion')->middleware('App\Http\Middleware\verifConnexion');

Route::get('/boncoloc/accueil', 'accueilController@getPage')->middleware('App\Http\Middleware\auth');

Route::get('/boncoloc/notconnect', 'pageConnexion@getPagePbConnexion');

Route::get('/boncoloc/disconnect', 'decoController@controleDisconnect');

Route::get('/boncoloc/inscription', 'inscriptionController@getPage');

Route::get('/', function () {
    return view('welcome');
});
