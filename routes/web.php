<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompetencesController;
use App\Http\Controllers\ParcoursController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SnakeController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/competences', [CompetencesController::class, 'competences'])->name('competences');
Route::get('/parcours', [ParcoursController::class, 'parcours'])->name('parcours');
Route::get('/cv', [CVController::class, 'cv'])->name('cv');
Route::get('/veille', [VeilleController::class, 'veille'])->name('veille');
Route::get('/stage', [StageController::class, 'stage'])->name('stage');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
