<?php

use App\Http\Controllers\Levels;
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
Route::get('/l1', [Levels::class, 'level1']);
Route::get('/l2', [Levels::class, 'level2']);
Route::get('/l3', [Levels::class, 'level3']);
Route::get('/l4', [Levels::class, 'level4']);
Route::get('/l5', [Levels::class, 'level5']);
