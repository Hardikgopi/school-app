<?php
use App\Http\Controllers\registercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;


Route::get('/', [registercontroller::class,"regfrm"]);
Route::post('/add-val',[registercontroller::class,'regval']);
// Route::get('login', [loginController::class, 'login'])->name('login');
// Route::post('login', [loginController::class, 'log']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Route to handle the login form submission
Route::post('/login', [LoginController::class, 'login']);