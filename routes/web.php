<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\MoviesController as MoviesController;

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

    return view('pages.home');

})->name('home');

Route::get('/Movies', [MoviesController::class, 'getMovies'])->name('movies');
