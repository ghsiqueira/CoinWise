<?php

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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< Updated upstream
=======
Route::get('/transfer', [TransferController::class, 'index'])->name('transfer.index');
Route::get('/transfer/create', [TransferController::class, 'create'])->name('transfer.create');
Route::post('/transfer', [TransferController::class, 'store'])->name('transfer.store');
Route::get('/chart', [ChartController::class, 'showChart']);

>>>>>>> Stashed changes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
