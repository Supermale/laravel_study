<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(HelloController::class)->group(function () {
    Route::get('/hello', 'index');
    Route::get('/hello/show', 'show');
    Route::get('/hello/list', 'list');
    Route::get('/hello/conf', 'conf');
});
