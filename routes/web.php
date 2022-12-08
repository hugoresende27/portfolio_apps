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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catar', [\App\Http\Controllers\HomeController::class, 'catar'])->name('catar');
Route::get('/ip', [\App\Http\Controllers\HomeController::class, 'ip'])->name('ip');
Route::get('/ip-my-ip', [\App\Http\Controllers\ipController::class, 'myIp'])->name('ip.myip');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
