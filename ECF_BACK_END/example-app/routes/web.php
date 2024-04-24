<?php

use App\Http\Controllers\OffreStageController;
use App\Http\Controllers\EntrepriseController;

// Affichage des offres de stage
Route::get('/offres-de-stage', 'OffreStageController@index')->name('offres.index');

// Affichage du détail d'une offre de stage
Route::get('/offres-de-stage/{id}', 'OffreStageController@show')->name('offres.show');


// Création d'une offre de stage (réservé aux entreprises authentifiées)
Route::get('/offres-de-stage/creer', [OffreStageController::class, 'create'])->name('offres.create')->middleware('auth:entreprise');
Route::post('/offres-de-stage/creer', [OffreStageController::class, 'store'])->name('offres.store')->middleware('auth:entreprise');

// Éditer la page d'enregistrement d'un utilisateur pour qu'il puisse y ajouter les détails de son entreprise
Route::get('/inscription', [EntrepriseController::class, 'create'])->name('inscription.create');
Route::post('/inscription', [EntrepriseController::class, 'store'])->name('inscription.store');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


require __DIR__.'/auth.php';






