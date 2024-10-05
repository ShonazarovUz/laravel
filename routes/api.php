<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/tokens/yaratish', function () {
    $user = User::query()->create([
        'name'  => 'Hikmatulloh',
        'email' => 'hikmatulloh@gmail.com',
        'password' => Hash::make('hikmatulloh'),

    ]);

    $token = $user->createToken('hikmatulloh')->plainTextToken;

    return response()->json(['token' => $token]);
});

Route::get('/tokens/Ads', function () {
    $user = User::query()->create([
        'status'  => 'aktive',
        'branch' => 'Chilonzor',
        'price' => '100$',
        'gender' => 'male'
    ]);

    $token = $user->createAds('Aktive')->plainTextToken;

    return response()->json(['token' => $token]);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/Ads', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(base_path('routes/v1.php'));
Route::prefix('v2')->group(base_path('routes/.v2.php'));
