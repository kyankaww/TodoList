<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodooController;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('isGuest')->group(function () {
    Route::post('/register/input', [TodooController::class, 'registerAccount'])->name('register.input');
    Route::post('/login/auth', [TodooController::class, 'auth'])->name('login.auth');
    Route::get('/login', [TodooController::class, 'login'])->name('login');
    Route::get('/register', [TodooController::class, 'register'])->name('register');
});

Route::middleware('isLogin')->group(function () {
    Route::get('/todolist', [TodooController::class, 'todolist'])->name('todolist');
    Route::get('/maketodo', [TodooController::class, 'maketodo'])->name('maketodo');
    Route::get('/home', [TodooController::class, 'home'])->name('home');
    Route::post('/store', [TodooController::class, 'store'])->name('store.new');
    Route::get('/edit/{id}', [TodooController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [TodooController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [TodooController::class, 'destroy'])->name('destroy');
    Route::patch('/complated/{id}', [TodooController::class, 'updateComplated'])->name('update-complated');
});



Route::get('/logout', [TodooController::class, 'logout'])->name('logout');
