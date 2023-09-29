<?php

use App\Http\Controllers\Accounting\AccountingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\Production\ProductionController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Trading\TradingController;
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
    Route::get('/trading',[TradingController::class, 'index'])->name('trading.index');
    Route::get('/accounting',[AccountingController::class, 'index'])->name('accounting.index');
    Route::get('/staff',[StaffController::class, 'index'])->name('staff.index');

    Route::prefix('production')->group(function() {
        Route::get('/', [ProductionController::class, 'index'])->name('production.index');
        Route::prefix('follow')->group(function(){
            Route::get('/animal', [ProductionController::class, 'follow_animal'])->name('production.follow.animal');
            Route::get('/food', [ProductionController::class, 'follow_food'])->name('production.follow.food');
            Route::get('/prophylaxis', [ProductionController::class, 'follow_prophylaxis'])->name('production.follow.prophylaxis');
        });
        Route::prefix('stock')->group(function(){
            Route::get('/', [ProductionController::class, 'stock_index'])->name('production.stock.index');
            Route::get('/order', [ProductionController::class, 'stock_order_index'])->name('production.stock.order.index');
            Route::get('/supply', [ProductionController::class, 'stock_supply_index'])->name('production.stock.supply.index');
        });
    });
});
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

