<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FichierController;
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

Route::get('/', [HomeController::class, 'index'])->name('Home Page');
Route::get('/files', [FichierController::class, 'list'])->name('files.list');
Route::get('/files/add-a-file', [FichierController::class, 'add'])->name('files.add');
Route::get('/files/{id}/details', [FichierController::class, 'details'])->name('files.details');
