<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RifaController;

// Main Page Route
Route::get('/panel', [HomePage::class, 'index'])->name('pages-home');
Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');
Route::get('/lang/{locale}', [LanguageController::class, 'swap']);
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');    
// authentication
Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');



// Rutas de website 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/rifa/{id}', [HomeController::class, 'index']);

// Ruta para la página de métodos de pago
Route::get('/metodos-de-pago', [PaymentController::class, 'index'])->name('payment.methods');
// Ruta para la página de preguntas frecuentes
Route::get('/preguntas-frecuentes', [FaqController::class, 'index'])->name('faq');

Route::resource('rifas', RifaController::class);
