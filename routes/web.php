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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/type', [App\Http\Controllers\Administrateur::class,'type_user'])->name('type_user');

//ADMINISTRATEUR
Route::get('ajouter_enseignant', function () {
    return view('Admi.ajoutens');
})->name('ajoutens');

Route::get('liste_enseignants', function () {
    return view('Admi.listeens');
})->name('listeens');

Route::get('liste_classes', function () {
    return view('Admi.listeclasse');
})->name('listeclasse');

Route::get('Ajout_classe', function () {
    return view('Admi.ajoutclasse');
})->name('ajoutclasse');

Route::post('storeclasse',[App\Http\Controllers\Administrateur::class,'storeclasse'])->name('storeclass');

Route::post('storeens',[App\Http\Controllers\Administrateur::class,'storeens'])->name('storeens');

//ENSEIGNANT



//ETUDIANT
