<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\Masyarakat\DashboardController;
use App\Http\Controllers\Masyarakat\LaporanController;

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
    return view('app.app');
});

Auth::routes(['verify'=>true]);

Route::get('kembali', function () {
    if (('role:masyarakat')) {
        return redirect()->route('masyarakat');
    }
})->name('home');

Route::group(['middleware' => ['role:masyarakat','auth','verified']], function () {
    Route::get('/masyarakat/dashboard', [DashboardController::class, 'index'])->name('masyarakat');
    Route::get('/masyarakat/laporan', [LaporanController::class, 'index'])->name('laporan');
    Route::post('/masyarakat/laporan/lapor', [LaporanController::class, 'lapor'])->name('lapor');
});

Route::get('/reload-captcha', [HelperController::class, 'reloadCaptcha']);
