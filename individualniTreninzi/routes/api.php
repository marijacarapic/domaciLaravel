<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PolaznikController;
use App\Http\Controllers\InstruktorController;
use App\Http\Controllers\TreningController;
use App\Http\Controllers\AuthController;

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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::get('polaznik', [PolaznikController::class, 'index']);
Route::get('polaznik/{polaznik}', [PolaznikController::class, 'show']);

Route::get('instruktor', [InstruktorController::class, 'index']);
Route::get('instruktor/{instruktor}', [InstruktorController::class, 'show']);

Route::get('trening', [TreningController::class, 'index']);
Route::get('trening/{trening}', [TreningController::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('instruktor', [InstruktorController::class, 'create']);
    Route::put('instruktor/{instruktor}', [InstruktorController::class, 'update']);
    Route::delete('instruktor/{instruktor}', [InstruktorController::class, 'destroy']);

    Route::delete('trening/{trening}', [TreningController::class, 'destroy']);

    Route::post('logout', [AuthController::class, 'logout']);
});
