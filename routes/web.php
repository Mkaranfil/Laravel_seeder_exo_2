<?php

use App\Http\Controllers\OrangesController;
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

Route::get('/', [OrangesController::class, 'index']);
Route::get('/company/show/{id}', [OrangesController::class, 'show']);
Route::get('/company/edit/{id}', [OrangesController::class, 'edit']);
Route::post('/company/update/{id}', [OrangesController::class, 'update']);