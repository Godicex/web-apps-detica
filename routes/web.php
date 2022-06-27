<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('main');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/play', function () {
    return view('player');
});

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/community', function () {
    return view('community');
});

Route::get('/user', function () {
    return view('user');
});



Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('home', function () {

    $book = DB::table('books')->get();

    return view('home', ['book' => $book]);
});
