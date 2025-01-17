<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ThanksController;


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

Route::middleware('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'index']);
});

Route::get('/', [ContactController::class, 'index']);
Route::post('contacts/confirm', [ContactController::class,'confirm']);
Route::post('contacts', [ContactController::class, 'store']);

Route::get('/thanks', [ThanksController::class, 'index']);


Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin', [AdminController::class, 'store']);
Route::post('/admin/delete', [AdminController::class, 'destroy']);






