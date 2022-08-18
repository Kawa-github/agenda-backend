<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;


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

Route::controller(ActivityController::class)->group(function(){

    Route::get('/home', [ActivityController::class, 'index']);
    Route::post('/cadastro', [ActivityController::class, 'store'])->name('cadastrar_atividade');
});


// "localhost:8000/api/"