<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/admin/login');
});

Route::get('/datascrapper', [App\Http\Controllers\DataScrapperController::class, 'index']);
Route::get('/datafetch', [App\Http\Controllers\DataFetchController::class, 'index']);
