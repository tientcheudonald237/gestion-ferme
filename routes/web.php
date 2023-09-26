<?php

use App\Http\Controllers\Commercialisation\CommercialisationController;
use App\Http\Controllers\Comptabilite\ComptabiliteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\Personnel\PersonnelController;
use App\Http\Controllers\Production\ProductionController;
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





Route::get('/login',[LoginController::class,'vue'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::middleware(['auth'])->group(function () {
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::post('/logout',[LoginController::class,'logout'])->name('logout');
    Route::get('/commercialisation',[CommercialisationController::class, 'index'])->name('commercialisation.index');
    Route::get('/comptabilite',[ComptabiliteController::class, 'index'])->name('comptabilite.index');
    Route::get('/personnel',[PersonnelController::class, 'index'])->name('personnel.index');
    Route::get('/production',[ProductionController::class, 'index'])->name('production.index');
});
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

