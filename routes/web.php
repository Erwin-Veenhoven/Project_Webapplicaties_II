<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\StationListController;
use App\Http\Controllers\WeatherDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/weather', [StationListController::class, 'showPage']);
Route::get('/data', [ChartController::class, 'showPage']);

Route::get('/download/xml', [DownloadController::class, 'downloadXml']);

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

