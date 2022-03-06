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

Route::get('/','IndexController@index');
Route::get('/Apropos','ProposController@index');
Route::get('/faqs','FaqFrontController@index');

Route::get('/objets','ObjetFrontController@index');
Route::get('/contact', 'ContactFrontController@index');
Route::post('/contact/store', 'ContactFrontController@store')->name('contact.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('produit','ProduitController');

Route::group(['middleware' =>['auth','admin']], function(){

    Route::get('/dash','dashController@index');
    Route::resource('objet','ObjetController');
    Route::resource('faq','FaqController');
    Route::resource('contacts','ContactController');

    Route::resource('utilisateur','UtilisateurController');
    Route::resource('reclamation','ReclamationController');
    Route::resource('categorie','CategorieController');

});

Route::group(['middleware' =>['auth','utilisateur']], function(){
    Route::get('/mon-profil', 'ProfilClientController@index')->name('mon-profil');
    Route::post('/profil/update/{id}','ProfilClientController@update');
    Route::resource('mes-don', 'DonController');

});
