<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\LegumeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/fruit', [FruitController::class, "index"]);

Route::get('/legume', [LegumeController::class, "index"]);

Route::get("/showLegumes/{id}", [LegumeController::class, "show"]);
Route::get("/showFruits/{id}", [FruitController::class, "show"]);
