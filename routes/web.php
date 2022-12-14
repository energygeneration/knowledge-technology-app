<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\inscritsController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\renseignementController;
use App\Http\Controllers\FormulaireInscriptionController;




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


Route::get('/home', [HomeController::class, 'index'])->name('home');
// acceuil route

Route::get('/', function () {
    return view('acceuil');
})->name('acceuil');

// formation route
Route::get('/formation', function () {
    return view('layouts.formation');
})->name('formation');

// // contact route
Route::get('/layouts', function () {
    return view('layouts.contact');
})->name('contact');

// insertion contact data on database 
Route::get('tousinscrits', [tousinscritsController::class, 'tousinscrits']);

// insertion contact data on database 
Route::post('renseignement', [renseignementController::class, 'renseignements'])->name('renseignement');

// insertion newsletter data on database 
Route::post('newsletter', [NewsletterController::class, 'newsletter']);

// insertion fotmulaire data on database 
Route::post('/FormulaireInscription', [FormulaireInscriptionController::class, 'FormulaireInscription']);

// // contact route for validation
Route::post('/layouts', function () {
    return view('layouts.contact');
})->name('contact');

// // contact route
Route::get('/formulaire', function () {
    return view('layouts.formulaire');
})->name('formulaire');

Route::get('/adminDashboard', function () {
    return view('layouts.adminDashboard');
})->name('adminDashboard');

// Route::get('/users', function () {
//     return view('users');
// })->name('users');
Route::get('/users', [HomeController::class, 'user'])->name('users');

// display table renseignement
Route::get('/renseignement', [Controller::class, 'renseignement'])->name('renseignements');

Route::get('/Inscriptions', [InscriptionController::class, 'Inscription'])->name('Inscriptions');

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
