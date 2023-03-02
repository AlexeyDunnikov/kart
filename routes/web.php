<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/second-page', [\App\Http\Controllers\MainController::class, 'secondPage'])->name('secondPage');

Route::post('/send-form', [\App\Http\Controllers\MainController::class, 'sendForm'])->name('sendForm');
