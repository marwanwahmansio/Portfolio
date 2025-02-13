<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompetencesController;
use App\Http\Controllers\ParcoursController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\VeilleController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\SnakeController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('home');
});
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/competences', [CompetencesController::class, 'index'])->name('competences.index');
Route::get('/parcours', [ParcoursController::class, 'index'])->name('parcours.index');
Route::get('/cv', [CVController::class, 'index'])->name('cv.index');
Route::get('/veille', [VeilleController::class, 'index'])->name('veille.index');
Route::get('/stage', [StageController::class, 'index'])->name('stage.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/snake', [SnakeController::class, 'index'])->name('snake.index');

