<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\AlbumController;
use App\Http\Controllers\API\v1\TrackController;

Route::prefix('v1')->group(function(){

    Route::get('/albums',        [AlbumController::class,'index']);
    Route::get('/albums/{id}',   [AlbumController::class,'show']);
    Route::post('/albums',       [AlbumController::class,'store']);
    Route::post('/albums/{id}',  [AlbumController::class,'update']);
    Route::delete('/albums/{id}',[AlbumController::class,'delete']);

    Route::get('/tracks',         [TrackController::class,'index']);
    Route::get('/tracks/{id}',    [TrackController::class,'show']);
    Route::post('/tracks',        [TrackController::class,'store']);
    Route::post('/tracks/{id}',   [TrackController::class,'update']);
    Route::delete('/tracks/{id}', [TrackController::class,'delete']);

});