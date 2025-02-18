<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.app');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/topics', function() {
    return view('pages.detail-topics');
})->name('detail.topics');