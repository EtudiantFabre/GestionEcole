<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenceController,
App\Http\Controllers\AnneeScolaireController,
App\Http\Controllers\ClasseController, 
App\Http\Controllers\CoefficientController, 
App\Http\Controllers\CotisationParraleleController, 
App\Http\Controllers\EleveController,
App\Http\Controllers\EnseignantController,
App\Http\Controllers\EtablissementController,
App\Http\Controllers\InscriptionController,
App\Http\Controllers\MatiereController,
App\Http\Controllers\NiveauSerieController,
App\Http\Controllers\NoteController,
App\Http\Controllers\ParentController,
App\Http\Controllers\ScolariteController,
App\Http\Controllers\TypeNoteController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});


//  Route pour les abqences
Route::prefix('absences')->group(function () {
    Route::get('/', [AbsenceController::class, 'index'])->name('absence.index');
    Route::get('create', [AbsenceController::class, 'create'])->name('absence.create');
    Route::post('/', [AbsenceController::class, 'store'])->name('absence.store');
    Route::get('/{absence}', [AbsenceController::class, 'show'])->name('absence.show');
    Route::get('/{absence}/edit', [AbsenceController::class, 'edit'])->name('absence.edit');
    Route::post('/{absence}', [AbsenceController::class, 'update'])->name('absence.update');
    Route::delete('/{absence}', [AbsenceController::class, 'destroy'])->name('absence.destroy');
});


//  Route pour les annees
Route::prefix('annee_scolaires')->group(function () {
    Route::get('/', [AnneeScolaireController::class, 'index'])->name('annee.index');
    Route::get('create', [AnneeScolaireController::class, 'create'])->name('annee.create');
    Route::post('/', [AnneeScolaireController::class, 'store'])->name('annee.store');
    Route::get('/{annee}', [AnneeScolaireController::class, 'show'])->name('annee.show');
    Route::get('/{annee}/edit', [AnneeScolaireController::class, 'edit'])->name('annee.edit');
    Route::post('/{annee}', [AnneeScolaireController::class, 'update'])->name('annee.update');
    Route::delete('/{annee}', [AnneeScolaireController::class, 'destroy'])->name('annee.destroy');
});


//  Route pour les classes
Route::prefix('classes')->group(function () {
    Route::get('/', [ClasseController::class, 'index'])->name('classe.index');
    Route::get('create', [ClasseController::class, 'create'])->name('classe.create');
    Route::post('/', [ClasseController::class, 'store'])->name('classe.store');
    Route::get('/{classe}', [ClasseController::class, 'show'])->name('classe.show');
    Route::get('/{classe}/edit', [ClasseController::class, 'edit'])->name('classe.edit');
    Route::post('/{classe}', [ClasseController::class, 'update'])->name('classe.update');
    Route::delete('/{classe}', [ClasseController::class, 'destroy'])->name('classe.destroy');
});


//  Route pour les coefficients
Route::prefix('coefficients')->group(function () {
    Route::get('/', [CoefficientController::class, 'index'])->name('coefficient.index');
    Route::get('create', [CoefficientController::class, 'create'])->name('coefficient.create');
    Route::post('/', [CoefficientController::class, 'store'])->name('coefficient.store');
    Route::get('/{coefficient}', [CoefficientController::class, 'show'])->name('coefficient.show');
    Route::get('/{coefficient}/edit', [CoefficientController::class, 'edit'])->name('coefficient.edit');
    Route::post('/{coefficient}', [CoefficientController::class, 'update'])->name('coefficient.update');
    Route::delete('/{coefficient}', [CoefficientController::class, 'destroy'])->name('coefficient.destroy');
});


//  Route pour les cotisations
Route::prefix('cotisation_parraleles')->group(function () {
    Route::get('/', [CotisationParraleleController::class, 'index'])->name('cotisation.index');
    Route::get('create', [CotisationParraleleController::class, 'create'])->name('cotisation.create');
    Route::post('/', [CotisationParraleleController::class, 'store'])->name('cotisation.store');
    Route::get('/{cotisation}', [CotisationParraleleController::class, 'show'])->name('cotisation.show');
    Route::get('/{cotisation}/edit', [CotisationParraleleController::class, 'edit'])->name('cotisation.edit');
    Route::post('/{cotisation}', [CotisationParraleleController::class, 'update'])->name('cotisation.update');
    Route::delete('/{cotisation}', [CotisationParraleleController::class, 'destroy'])->name('cotisation.destroy');
});


//  Route pour les eleves
Route::prefix('eleves')->group(function () {
    Route::get('/', [EleveController::class, 'index'])->name('eleve.index');
    Route::get('create', [EleveController::class, 'create'])->name('eleve.create');
    Route::post('/', [EleveController::class, 'store'])->name('eleve.store');
    Route::get('/{eleve}', [EleveController::class, 'show'])->name('eleve.show');
    Route::get('/{eleve}/edit', [EleveController::class, 'edit'])->name('eleve.edit');
    Route::post('/{eleve}', [EleveController::class, 'update'])->name('eleve.update');
    Route::delete('/{eleve}', [EleveController::class, 'destroy'])->name('eleve.destroy');
});


//  Route pour les enseignants
Route::prefix('enseignants')->group(function () {
    Route::get('/', [EnseignantController::class, 'index'])->name('enseignant.index');
    Route::get('create', [EnseignantController::class, 'create'])->name('enseignant.create');
    Route::post('/', [EnseignantController::class, 'store'])->name('enseignant.store');
    Route::get('/{enseignant}', [EnseignantController::class, 'show'])->name('enseignant.show');
    Route::get('/{enseignant}/edit', [EnseignantController::class, 'edit'])->name('enseignant.edit');
    Route::post('/{enseignant}', [EnseignantController::class, 'update'])->name('enseignant.update');
    Route::delete('/{enseignant}', [EnseignantController::class, 'destroy'])->name('enseignant.destroy');
});

//  Route pour les etablisements
Route::prefix('etablissements')->group(function () {
    Route::get('/', [EtablissementController::class, 'index'])->name('etablissement.index');
    Route::get('create', [EtablissementController::class, 'create'])->name('etablissement.create');
    Route::post('/', [EtablissementController::class, 'store'])->name('etablissement.store');
    Route::get('/{etablissement}', [EtablissementController::class, 'show'])->name('etablissement.show');
    Route::get('/{etablissement}/edit', [EtablissementController::class, 'edit'])->name('etablissement.edit');
    Route::post('/{etablissement}', [EtablissementController::class, 'update'])->name('etablissement.update');
    Route::delete('/{etablissement}', [EtablissementController::class, 'destroy'])->name('etablissement.destroy');
});


//  Route pour les inscriptions
Route::prefix('inscriptions')->group(function () {
    Route::get('/', [InscriptionController::class, 'index'])->name('inscription.index');
    Route::get('create', [InscriptionController::class, 'create'])->name('inscription.create');
    Route::post('/', [InscriptionController::class, 'store'])->name('inscription.store');
    Route::get('/{inscription}', [InscriptionController::class, 'show'])->name('inscription.show');
    Route::get('/{inscription}/edit', [InscriptionController::class, 'edit'])->name('inscription.edit');
    Route::post('/{inscription}', [InscriptionController::class, 'update'])->name('inscription.update');
    Route::delete('/{inscription}', [InscriptionController::class, 'destroy'])->name('inscription.destroy');
});


//  Route pour les matieres
Route::prefix('matieres')->group(function () {
    Route::get('/', [MatiereController::class, 'index'])->name('matiere.index');
    Route::get('create', [MatiereController::class, 'create'])->name('matiere.create');
    Route::post('/', [MatiereController::class, 'store'])->name('matiere.store');
    Route::get('/{matiere}', [MatiereController::class, 'show'])->name('matiere.show');
    Route::get('/{matiere}/edit', [MatiereController::class, 'edit'])->name('matiere.edit');
    Route::post('/{matiere}', [MatiereController::class, 'update'])->name('matiere.update');
    Route::delete('/{matiere}', [MatiereController::class, 'destroy'])->name('matiere.destroy');
});


//  Route pour les niveaux
Route::prefix('niveau_series')->group(function () {
    Route::get('/', [NiveauSerieController::class, 'index'])->name('niveau.index');
    Route::get('create', [NiveauSerieController::class, 'create'])->name('niveau.create');
    Route::post('/', [NiveauSerieController::class, 'store'])->name('niveau.store');
    Route::get('/{niveau}', [NiveauSerieController::class, 'show'])->name('niveau.show');
    Route::get('/{niveau}/edit', [NiveauSerieController::class, 'edit'])->name('niveau.edit');
    Route::post('/{niveau}', [NiveauSerieController::class, 'update'])->name('niveau.update');
    Route::delete('/{niveau}', [NiveauSerieController::class, 'destroy'])->name('niveau.destroy');
});


//  Route pour les notes
Route::prefix('notes')->group(function () {
    Route::get('/', [NoteController::class, 'index'])->name('note.index');
    Route::get('create', [NoteController::class, 'create'])->name('note.create');
    Route::post('/', [NoteController::class, 'store'])->name('note.store');
    Route::get('/{note}', [NoteController::class, 'show'])->name('note.show');
    Route::get('/{note}/edit', [NoteController::class, 'edit'])->name('note.edit');
    Route::post('/{note}', [NoteController::class, 'update'])->name('note.update');
    Route::delete('/{note}', [NoteController::class, 'destroy'])->name('note.destroy');
});

//  Route pour les parents
Route::prefix('parents')->group(function () {
    Route::get('/', [ParentController::class, 'index'])->name('parent.index');
    Route::get('create', [ParentController::class, 'create'])->name('parent.create');
    Route::post('/', [ParentController::class, 'store'])->name('parent.store');
    Route::get('/{parent}', [ParentController::class, 'show'])->name('parent.show');
    Route::get('/{parent}/edit', [ParentController::class, 'edit'])->name('parent.edit');
    Route::post('/{parent}', [ParentController::class, 'update'])->name('parent.update');
    Route::delete('/{parent}', [ParentController::class, 'destroy'])->name('parent.destroy');
});

//  Route pour les scolarités
Route::prefix('scolarites')->group(function () {
    Route::get('/', [ScolariteController::class, 'index'])->name('scolarite.index');
    Route::get('create', [ScolariteController::class, 'create'])->name('scolarite.create');
    Route::post('/', [ScolariteController::class, 'store'])->name('scolarite.store');
    Route::get('/{scolarite}', [ScolariteController::class, 'show'])->name('scolarite.show');
    Route::get('/{scolarite}/edit', [ScolariteController::class, 'edit'])->name('scolarite.edit');
    Route::post('/{scolarite}', [ScolariteController::class, 'update'])->name('scolarite.update');
    Route::delete('/{scolarite}', [ScolariteController::class, 'destroy'])->name('scolarite.destroy');
});

//  Route pour les type de notes
Route::prefix('type_notes')->group(function () {
    Route::get('/', [TypeNoteController::class, 'index'])->name('type_note.index');
    Route::get('create', [TypeNoteController::class, 'create'])->name('type_note.create');
    Route::post('/', [TypeNoteController::class, 'store'])->name('type_note.store');
    Route::get('/{type}', [TypeNoteController::class, 'show'])->name('type_note.show');
    Route::get('/{type}/edit', [TypeNoteController::class, 'edit'])->name('type_note.edit');
    Route::post('/{type}', [TypeNoteController::class, 'update'])->name('type_note.update');
    Route::delete('/{type}', [TypeNoteController::class, 'destroy'])->name('type_note.destroy');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
