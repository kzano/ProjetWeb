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

Route::get('/boncoloc/annonce/{id}', 'annonce@getPage')->middleware('App\Http\Middleware\typeProfilRecherche');

Route::get('/boncoloc/monAnnonce', 'monAnnonceController@getPage')->middleware('App\Http\Middleware\typeProfilAnnonceur');

Route::get('/boncoloc/ajoutAnnonce', 'ajoutPublicationController@getPage')->middleware('App\Http\Middleware\typeProfilAnnonceur');

Route::post('/boncoloc/annonce', 'listeAnnonce@getPage')->middleware('App\Http\Middleware\typeProfilRecherche');

Route::post('/boncoloc/ajoutAnnonce', 'ajoutPublicationController@postAjoutAnnonce')->middleware('App\Http\Middleware\typeProfilAnnonceur');

Route::get('/boncoloc/inscription', 'inscriptionController@getPage');

Route::post('/boncoloc/inscription', 'inscriptionController@ajout');

Route::get('/boncoloc', 'pageConnexion@getPage');

Route::post('/boncoloc', 'pageConnexion@aldo');

Route::post('/verif', 'connexionController@postConnexion')->middleware('App\Http\Middleware\verifConnexion');

Route::get('/boncoloc/rechercheLogement', 'accueilController@getPage')->middleware('App\Http\Middleware\typeProfilRecherche');

Route::get('/boncoloc/disconnect', 'decoController@controleDisconnect')->middleware('App\Http\Middleware\auth');

Route::get('/boncoloc/inscription', 'inscriptionController@getPage');

Route::post('boncoloc/monAnnonce/modification', 'modificationAnnonceController@getPageModification')->middleware('App\Http\Middleware\typeProfilAnnonceur');

Route::post('boncoloc/monAnnonce/modification/{id}', 'validationModification@validateModification')->middleware('App\Http\Middleware\typeProfilAnnonceur');

Route::post('boncoloc/monAnnonce/supprimer/{id}', 'supprimerAnnonceController@delete')->middleware('App\Http\Middleware\typeProfilAnnonceur');

Route::get('/', function () {
    return view('welcome');
});
