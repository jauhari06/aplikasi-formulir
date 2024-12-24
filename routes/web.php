<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FormController::class, 'view']);
Route::get('/form2', [FormController::class, 'view2']);
Route::get('/form3', [FormController::class, 'view3']);
