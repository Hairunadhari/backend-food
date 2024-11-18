<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RajaOngkirController;
use App\Http\Controllers\Api\ApiProdukController;
use App\Http\Controllers\Api\ApiKategoriController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/province',[RajaOngkirController::class, 'getProvince']);
Route::get('/cityByProvince/{id}',[RajaOngkirController::class, 'getCity']);
Route::post('/cost',[RajaOngkirController::class, 'cost']);

Route::get('/kategori',[ApiKategoriController::class, 'index']);
Route::get('/kategori/{id}/produk',[ApiKategoriController::class, 'getProdukByKategori']);

Route::get('/produk',[ApiProdukController::class, 'index']);
Route::get('/produk/{id}',[ApiProdukController::class, 'detail']);