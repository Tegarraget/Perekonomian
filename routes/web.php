<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\UploadController;

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
    $documents = \App\Models\Document::all();
    return view('welcome', compact('documents'));
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.submit');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');

Route::get('/dashboard', function () {
    $documents = \App\Models\Document::all();
    return view('dashboard', compact('documents'));
})->name('dashboard');

Route::post('/upload', [UploadController::class, 'store'])->name('upload');

Route::delete('/delete/{id}', [UploadController::class, 'destroy'])->name('delete');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
