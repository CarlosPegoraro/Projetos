<?php

use App\Http\Controllers\Levels;
use App\Http\Controllers\RandomizerController;
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

Route::get('/', [Levels::class, 'menu']);
Route::get('/level', [Levels::class, 'randompage']);
