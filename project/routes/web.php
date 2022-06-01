<?php

use App\Http\Controllers\GeneralController\GeneralController;
use App\Http\Controllers\Translations\addTranslationsController;
use App\Http\Controllers\Translations\editTranslationsController;
use App\Http\Controllers\Translations\listTranslationsController;
use Illuminate\Support\Facades\Route;



Route::get('/',[GeneralController::class, "index"])->name("index");

Route::prefix('translations')->group(function() {
    
    Route::get('/add',[addTranslationsController::class, "addTranslations"])->name("addTranslations");
    Route::post('/add',[addTranslationsController::class, "addTranslationsPost"])->name("addTranslationsPost");
    Route::get('/list',[listTranslationsController::class, "listTranslations"])->name("listTranslations");
    Route::get('/delete/{id}',[listTranslationsController::class, "deleteTranslations"])->name("deleteTranslations");
    Route::get('/edit/{id}',[editTranslationsController::class, "editTranslations"])->name("editTranslations");
    Route::post('/edit/{id}',[editTranslationsController::class, "editTranslationsPost"])->name("editTranslationsPost");
    Route::post('/view',[listTranslationsController::class, "viewTranslations"]);

});