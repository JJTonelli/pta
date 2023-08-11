<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\GeneradorController;
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

Route::get('/', [PokemonController::class, 'index']);

Route::prefix('pokemon')->group(function () {
    Route::get('/{numero}', [PokemonController::class, 'show']);
});
Route::get('/generador', [GeneradorController::class, 'index']);

