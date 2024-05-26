<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/store', [PageController::class, 'store'])->name('home.store');
Route::post('/store', [PageController::class, 'create'])->name('home.create');
Route::get('/edit', [PageController::class, 'edit'])->name('home.edit');
Route::get('/edit/{id}', [PageController::class, 'editProject'])->name('editProject');
Route::post('/edit/{id}', [PageController::class, 'update'])->name('update');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'auth'])->name('user.auth');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');


Route::get('delete/{id}', [UserController::class, 'destroy'])->name('project.delete');


Route::post('email', [PageController::class, 'send'])->name('email');
