<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BinomLanderController;
use App\Http\Controllers\LanderController;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;

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
Route::get('/', function (){
    echo "I knew you would pay me a visit";
});

Route::get('/checkStatus/{customerId}', [LanderController::class, 'checkStatus']);
Route::post('/{design_id}/{country}/insertlead',[LanderController::class, 'insertLandingpageLead']);
Route::get('/{design_id}/{country}',[BinomLanderController::class, 'landingpageView']);

// checkout
Route::post('/package', [PaymentController::class, 'package'])->name('package');
Route::post('package/checkoutCustom', [PaymentController::class, 'checkoutCustom'])->name('package.checkout.ajax');
