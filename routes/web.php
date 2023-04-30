<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get', 'post'], '/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/p', [\App\Http\Controllers\IndexController::class, 'pdfGenerate'])->name('pdfgenerate');
Route::get('/m', [\App\Http\Controllers\IndexController::class, 'mailSend'])->name('mailsend');
