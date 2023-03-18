<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalonController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\JurusanController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    });
    Route::get('/kandidat', [CalonController::class, 'index']);
    Route::get('/jurusan', [JurusanController::class, 'index']);
    Route::get('/jurusan/{id}', [JurusanController::class, 'index']);
    Route::get('/pemilih', [PenggunaController::class, 'index']);
});

