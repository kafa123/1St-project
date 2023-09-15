<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\testController;
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
Route::get('/',function(){
    return view('welcome',[
        "pagename" => "Home"
    ]);
});
Route::get('/about',[testController::class,'index']);

Route::get('/book',[BookController::class,'index']);
Route::post('/book',[BookController::class,'store']);

Route::get('/book/{id}/edit',[BookController::class,'edit']);

Route::put('/book/{id}',[BookController::class,'update']);

Route::delete('book/{id}',[BookController::class,'destroy']);

