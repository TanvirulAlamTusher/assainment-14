<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

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


//Answer 1:
Route::post('/name',[DemoController::class,'getName']);
//Answer 2:
Route::post('/useragent',[DemoController::class,'getUserAgent']);
//Answer 5:
Route::post('/upload', [DemoController::class, 'upload']);

//Answer 6:
Route::get('/cookie', [DemoController::class, 'getCookie']);

//Answer 7:
Route::post('/submit', [DemoController::class, 'submit']);