<?php

use App\Http\Controllers\clientes;
use App\Http\Controllers\clientesController;
use Illuminate\Support\Facades\Route;

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

Route::get("/token" , function(){
    return json_encode( csrf_token());
});


Route::prefix('clientes')->group(function () {
    Route::get('/',[ clientesController::class, 'index']);
    Route::post('/',[ clientesController::class, 'store']);
    Route::delete('/delete/{id}',[clientesController::class, 'destroy']);
    Route::get('/{id}',[ clientesController::class, 'edit']);
    Route::put('/{id}',[ clientesController::class, 'update']);
});









