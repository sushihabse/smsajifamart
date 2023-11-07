<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SajifaMartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;






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

Route::get('/', [SajifaMartController::class, 'index'])->name('home');
Route::get('/product-category', [SajifaMartController::class, 'category'])->name('product-category');
Route::get('/product-detail', [SajifaMartController::class, 'product'])->name('product-detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('order',OrderController::class);

});
