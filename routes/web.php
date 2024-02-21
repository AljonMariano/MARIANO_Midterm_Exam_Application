<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/Echi', [ProductController::class, 'Echi'])->name('Echi');
Route::get('/Slice', [ProductController::class, 'slice_of_life'])->name('Slice');
Route::get('/comedy', [ProductController::class, 'comedy'])->name('comedy');


Route::redirect('/', '/Echi');
