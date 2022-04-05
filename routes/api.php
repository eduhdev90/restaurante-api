<?php

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrdersItensController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Models\OrdersItens;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('test', function () {
   $res =  event(new App\Events\StatusLiked('Someone'));
    return "Event has been sent!";
});

Route::get('/products', [ProductsController::class, 'index']);


Route::get('/orders', [OrdersController::class, 'index']);
Route::get('/orders/send', [OrdersController::class, 'getEnd']);
Route::get('/orders/send/{order_id}', [OrdersController::class, 'send']);
Route::get('/orders/finaly/{order_id}', [OrdersController::class, 'finaly']);
Route::post('/orders', [OrdersController::class, 'create']);
Route::post('/ordersitens', [OrdersItensController::class, 'create']);
Route::post('/ordersitens/lot', [OrdersItensController::class, 'createLot']);
