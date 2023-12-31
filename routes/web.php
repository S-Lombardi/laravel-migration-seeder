<?php

use Illuminate\Support\Facades\Route;
//collegamento con il file Controller
use App\Http\Controllers\Guest\TrainController;
use App\Http\Controllers\Guest\PasseggeriController;


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

Route::get('/', [TrainController::class, 'index']);
Route::get('/', [PasseggeriController::class, 'index']);



