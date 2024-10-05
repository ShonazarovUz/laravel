<?php

declare(strict_types=1);
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return response()->json([
        'user'=>$request->user(),
        'version' => 1
    ]);
})->middleware('auth:sanctum');
