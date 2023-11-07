<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/school', [App\Http\Controllers\HomeController::class, 'school'])->middleware("guest")->name('school');
Route::get('/transaction', [App\Http\Controllers\TransactionController::class, 'index'])->name('index.transaction');
Route::get('/transaction/create', [App\Http\Controllers\TransactionController::class, 'create'])->name('create.transaction');
Route::get('/transaction/edit/{id}', [App\Http\Controllers\TransactionController::class, 'edit'])->name('edit.transaction');
Route::post('/transaction/store', [App\Http\Controllers\TransactionController::class, 'store'])->name('store.transaction');
Route::post('/transaction/edit/{id}', [App\Http\Controllers\TransactionController::class, 'update'])->name('update.transaction');
Route::get('/transaction/delete/{id}', [App\Http\Controllers\TransactionController::class, 'delete'])->name('delete.transaction');



Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

