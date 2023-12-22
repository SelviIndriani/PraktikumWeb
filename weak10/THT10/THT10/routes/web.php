<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendataanController;


Route::get('/index',[PendataanController::class, 'showFormPesan'])->name('show-form-pesan');
Route::post('/submit-order', [PendataanController::class, 'submitOrder'])->name('submit-order');
Route::get('/', function () {
return redirect()->route('show-form-pesan'); // Ubah rute ke show-form-pesan
});
