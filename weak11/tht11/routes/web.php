<?php

use App\Http\Controllers\SignIn;

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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\PendataanController;

// Route::get('/crud', [FoodController::class, 'index']); // Menetapkan rute root langsung ke 'foods.index'
Route::get('/', [PendataanController::class, 'showPriceList']); // Menetapkan rute root langsung ke 'foods.index'
Route::resource('foods', FoodController::class);

Route::get('/login', function () {
    return view('index'); // Ubah rute ke show-form-pesan
});
Route::post('/signin', [SignIn::class, 'signIn']); // Menetapkan rute root langsung ke 'foods.index'

