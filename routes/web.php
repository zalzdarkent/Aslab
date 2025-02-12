<?php

use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.app');
// });
Route::get('/', [TeamController::class, 'index'])->name('index');