<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;

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

Route::get('/',[PersonalController::class,'index']);
Route::get('/personal/register', [PersonalController::class,'create'])->name('create');
Route::post('/personal/create', [PersonalController::class,'store'])->name('store');
Route::get('/personal/{personal:id}/edit', [PersonalController::class,'edit']);
Route::post('/personal/{personal:id}/update', [PersonalController::class,'update']);
Route::get('/personal/{personal:id}/delete', [PersonalController::class,'destroy']);