<?php

use App\Http\Controllers\BerandaContollers;
use App\Http\Controllers\VideoControllers;
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

Route::resource('beranda',BerandaContollers::class);
Route::resource('video',VideoControllers::class);