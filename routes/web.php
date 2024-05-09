<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('/login', [LoginController::class, 'authenticate']); // Gunakan alamat lengkap untuk LoginController

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
