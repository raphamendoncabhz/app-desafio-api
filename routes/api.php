<?php

use App\Http\Controllers\API\v1\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LicensePlateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Client;

Route::get('/', function(){
    return response()->json(['api_name' => 'Api Desafio Clientes ']);
});

Route::get('users', [UserController::class, 'index']);

Route::prefix('v1')->group(function(){

    Route::get('/', function(){
        return response()->json(['api_name' => 'laravel_jwt', 'api_version' => '1.0.0']);
    });
    /**Rota para o Login */
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware(['apiJWT'])->group(function () {

        Route::post('me', [AuthController::class, 'me']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('refresh', [AuthController::class, 'refresh']);

        //List Resources
        Route::get('users', [UserController::class, 'index']);
       // Route::get('clientes', [ClientController::class, 'index']);
        //Route::post('clientes', [ClientController::class, 'store']);
        //Route::put('clientes/{id}', [ClientController::class, 'update']);

        Route::apiResource('clientes',ClientController::class);

        Route::get('/consulta/final-placa/{id}', [LicensePlateController::class, 'getLicensePlateByEndNumber'] );

    });
});
