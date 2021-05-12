<?php

use Illuminate\Support\Facades\DB;
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

Route::get('nesf', function () {
    return view('auth.creation_super_admi');
})->name('nesf');
//ENSEIGNANT

Route::get('Ajout_lecon', function () {
    return view('ens.ajoutlecon');
})->name('ajoutlecon');


Route::post('storelecon',[App\Http\Controllers\Enseignant::class,'storelecon'])->name('storelecon');
Route::get('classe/{id}' , [App\Http\Controllers\Enseignant::class , 'cours'])->name('cours');
Route::get('classes/{id}', function ($id) {

    $cours = DB::table('cours')->where('idC',$id)->get();
    $classe = DB::table('classes')->find($id);

    if (count($cours)==0){
        echo 'VOUS N\'AVEZ PAS ENTRÉ DE LEÇONS POUR CETTE CLASSE !';

    }
    else{
         return view('ens.cours',compact('cours','classe'));
    }

})->name('cour');

Route::get('lecon/{id}', function ($id) {

    $cours = DB::table('cours')->find($id);
    return view('ens.lecon',compact('cours'));

})->name('lecon');
Route::get('{fichier}', function ($fichier) {
    echo asset($fichier);
})->name('pdf');

Route::get('evaluation/{id}', function ($id) {

    $cours = DB::table('evaluations')->where('idC',$id)->get();
    return view('ens.evaluation',compact('cours'));

})->name('evaluation');

Route::get('forum/{id}', function ($id) {

    $commentaires = DB::table('commentaires')->where('idC',$id)->get();
    return view('ens.forum',compact('commentaires','id'));

})->name('forum');

Route::post('storecommen',[App\Http\Controllers\Enseignant::class,'storecommen'])->name('storecommen');

//ETUDIANT


Route::post('storeetd',[App\Http\Controllers\Etudiant::class,'storeet'])->name('register_eleve');

Route::get('classe/{id}', function ($id) {

    $cours = DB::table('cours')->where('idC',$id)->get();
    $classe = DB::table('classes')->find($id);


    return view('Etudiant.listecours',compact('cours','classe'));


})->name('liste_lecon_et');

Route::get('lecon_et/{id}', function ($id) {

    $cours = DB::table('cours')->find($id);
    $classe = DB::table('classes')->find($id);
    return view('Etudiant.cours',compact('cours','classe'));

})->name('lecon_et');


Route::get('evaluations/{id}', function ($id) {

    $cours = DB::table('evaluations')->where('idC',$id)->get();
    return view('Etudiant.evaluation',compact('cours'));

})->name('evaluations');


Route::post('storeeval/{id}',[App\Http\Controllers\Etudiant::class,'storeeval'])->name('storeeval');



Route::get('resultat', function () {
    return view('Etudiant.resultat');
})->name('resultat');


