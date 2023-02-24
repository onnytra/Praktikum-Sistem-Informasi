<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\BobotController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\MatrixkeputusanController;
use App\Http\Controllers\viewsaw;
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

Route::controller(AlternatifController::class)->group(function () {
    Route:: resource('alternatif', AlternatifController::class);
    Route::get('/', [AlternatifController::class, 'index']);
    // Route::get('movies', [MovieController::class, 'index']);
});
Route::controller(KriteriaController::class)->group(function () {
    Route:: resource('kriteria', KriteriaController::class);
});
Route::controller(BobotController::class)->group(function () {
    Route:: resource('bobot', BobotController::class);
});
Route::controller(MatrixkeputusanController::class)->group(function () {
    Route:: resource('matrixkeputusan', MatrixkeputusanController::class);
});
Route::get('/saw', [viewsaw::class, 'vmatrix'])->name('saw');
Route::get('/maxmin', [viewsaw::class, 'maxmin'])->name('maxmin');
Route::get('/vnormal', [viewsaw::class, 'normalisasi'])->name('normalisasi');
Route::get('/rank', [viewsaw::class, 'rank'])->name('rank');