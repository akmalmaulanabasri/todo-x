<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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
Route::middleware('islogin')->group(function(){
    Route::get('/todo', [TodoController::class, 'todo'])->name('todo');
    Route::get('/complated',[Todocontroller::class,'complated'])->name('complated');
    Route::get('/create',[TodoController::class, 'create'])->name('create');
    Route::post('/store', [TodoController::class, 'store'])->name('store');
    Route::get('/edit/{id}',[TodoController::class, 'edit'])->name('edit');
    Route::post('/todo/update/{id}',[TodoController::class,'update'])->name('update');
    Route::get('/todo/selesai/{id}',[TodoController::class,'selesai'])->name('selesai');
});

Route::middleware('isGuest')->group(function(){
    Route::get('/', [TodoController::class, 'login'])->name('login');
    Route::get('/login', [TodoController::class, 'login'])->name('login');
    Route::post('/register', [TodoController::class,'registerAccount'])->name('register.input');
    Route::post('/login/auth',[TodoController::class,'auth'])->name('login.auth');
});

Route::get('/logout',[TodoController::class, 'logout'])->name('logout');