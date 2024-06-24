<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SurveyController;

/* cette route est la page d'inscription */
Route::get('/', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/', [AuthController::class, 'register']);


/* cette route est la page de login*/
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


/* cette route est la page d'acceuil */
Route::get('acceuil', function (){ return view('acceuil');})->name('acceuil'); 


/* cette route est la page de profile*/
Route::get('profile', [ProfileController::class, 'show'])->middleware('auth')->name('profile');


/* cette route est la page du sondage */
Route::get('survey1', [SurveyController::class, 'showSurvey1'])->middleware('auth')->name('survey1');
Route::post('survey1', [SurveyController::class, 'storeSurvey1'])->middleware('auth');


/* cette route est la page de resultat sondage */
Route::get('survey1/results', [SurveyController::class, 'resultsSurvey1'])->middleware('auth')->name('survey1/results');
Route::get('index', [ProfileController::class, 'index'])->middleware('auth')->name('index');

Route::post('index', [ProfileController::class, 'index'])->name('index');
