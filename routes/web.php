<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\DesainController;

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
    return redirect()->route('login');
});

Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');

Route::middleware(['web'])->group(function () {
    Route::get('/ab', [AbController::class, 'index']);
});

Route::get('/register', 'App\Http\Controllers\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\RegisterController@register');

Route::middleware(['web'])->group(function () {
    Route::get('/ab', 'App\Http\Controllers\HomeController@index')->name('home');
});

Route::get('/Keranjang', 'App\Http\Controllers\HomeController@keranjang')->name('keranjang');

Route::get('/HalamanUpload', function () {
    return view('HalamanUpload');
})->name('HalamanUpload');

Route::middleware(['auth', 'check_email:email@example.com'])->group(function () {
    Route::get('/upload', 'App\Http\Controllers\DesainController@create')->name('HalamanUpload');
    Route::post('/upload', 'App\Http\Controllers\DesainController@store')->name('UploadDesain');
});

Route::post('/likes/{id}', 'App\Http\Controllers\HomeController@likes')->name('likes');



