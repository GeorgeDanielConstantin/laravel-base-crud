<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TrackController;


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

Route::get('tracks', [TrackController::class, 'index'])->name('tracks.index');
Route::get('/', [TrackController::class, 'show'])->name('tracks.show');
Route::get('/', [TrackController::class, 'create'])->name('tracks.create');
Route::post('/', [TrackController::class, 'store'])->name('tracks.store');
Route::resource('tracks', TrackController::class);