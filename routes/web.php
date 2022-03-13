<?php

use App\Http\Controllers\ApiController;
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
    return view('index');
})->name('index');

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/library',[ApiController::class,'Librerias'])->name('library');

Route::get('/library2', function () {
    return view('library2');
})->name('library2');

Route::get('/library3', function () {
    return view('library3');
})->name('library3');

Route::get('/library4', function () {
    return view('library4');
})->name('library4');


Route::get('/detalles', function () {
    return view('detalles');
})->name('detalles');