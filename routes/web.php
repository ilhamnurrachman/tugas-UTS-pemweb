<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AuthController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'])->name(('logout'));
route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');

route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/user', [Homecontroller::class, 'index'])->name('index');
    Route::get('/create', [Homecontroller::class, 'create'])->name('user-create');
    Route::post('/store', [Homecontroller::class, 'store'])->name('user-store');
    Route::get('/edit{id} ', [Homecontroller::class, 'edit'])->name('user-edit');
    Route::put('/update{id} ', [Homecontroller::class, 'update'])->name('user-update');
    Route::delete('/delete{id} ', [Homecontroller::class, 'delete'])->name('user-delete');
    Route::get('/dashboard', [Homecontroller::class, 'dashboard'])->name('dashboard');
    Route::get('/user', [Homecontroller::class, 'index'])->name('user');
    Route::get('/users', [HomeController::class, 'index'])->name('user');
});



route::get('/', function () {
    return view('dashboard');
});


Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
route::view('forgotpassword', 'forgotpassword');
route::view('Admin', 'Admin');
