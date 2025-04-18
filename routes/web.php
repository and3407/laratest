<?php

use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/common', [CommonController::class, 'index']);
Route::get('/common/ab', [CommonController::class, 'ab']);
