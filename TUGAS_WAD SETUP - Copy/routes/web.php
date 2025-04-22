<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CosplayController;

Route::get('/kostum', [CosplayController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
