<?php

use Illuminate\Support\Facades\Route;  
use Http\Controllers\ContactController;

/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/  

Route::get('/', function () {
    return view('welcome');
});

Route::get('/commandeModele', function() {
    return view('commandeModele');
})->name("commandeModele");

Route::get('/commandeSavon', function() {
    return view('commandeSavon');
})->name('commandeSavon');

Route::post('/contact' ,[ContactController::class ,'send'])->name('contact.send');