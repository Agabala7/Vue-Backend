<?php

use App\Http\Controllers\Translations\addTranslationsController;
use App\Http\Controllers\Translations\listTranslationsController;
use App\Http\Controllers\TranslationsApiController\addTranslationsApiController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-translate',[listTranslationsController::class, "getTranslate"])->name("getTranslate");
Route::get('/add-translate',[addTranslationsApiController::class, "addTranslate"])->name("addTranslate");
Route::post('/add-translate',[addTranslationsApiController::class, "addTranslatePost"])->name("addTranslatePost");

Route::get('/api',[addTranslationsApiController::class, "addTranslateApi"])->name("addTranslateApi");
Route::post('/api',[addTranslationsApiController::class, "addTranslateApiPost"])->name("addTranslateApiPost");