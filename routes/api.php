<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ScategorieController;
use App\Http\Controllers\ArticleController;

Route::middleware('api')->group(function () {
    Route::resource('categories', CategorieController::class);
    Route::resource('scategories', ScategorieController::class);
    Route::resource('articles', ArticleController::class);

    // route personnalises
    Route::get('/scat/{idcat}',[ScategorieController::class,'showSCategorieByCAT']);
});

