<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [HomeController::class, 'CreateView'])->name('createview');
Route::post('/create', [HomeController::class, 'Create'])->name('add');
Route::delete('/delete/{id}', [HomeController::class, 'Delete'])->name('delete');

Route::get('/view', [HomeController::class, 'view'])->name('view');
