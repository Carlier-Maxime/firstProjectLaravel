<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TacheController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/apropos', [HomeController::class, 'apropos']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/taches',[TacheController::class, 'index']);
Route::get('/taches/{id}', [TacheController::class, 'show'])->where('id', '[0-9]+');
Route::get('/taches/filtre', [TacheController::class, 'filtre']);
