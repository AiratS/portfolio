<?php

declare(strict_types=1);

use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\MessageController;
use Illuminate\Support\Facades\Route;

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

Route::name('api.')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');

    Route::post('/message', [MessageController::class, 'store'])->name('message.store');
});
