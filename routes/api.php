<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\SubscriptionController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

Route::get('/token', function () {

    $response = Http::timeout(60)->asForm()->post('http://127.0.0.1:8002/oauth/token', [
        'grant_type' => 'client_credentials',
        'client_id' => 3,
        'client_secret' => 'DGNt5fm6XXsgLPxcRifJngoilGDAmZMJudtgNmf7',
        'scope' => '',
    ]);

    return $response->json()['access_token'];
});

// Route::get('/subscriptions', [SubscriptionController::class, 'index']);

Route::middleware('client')->group(function () {
    Route::get('/subscription', [SubscriptionController::class, 'index']);
});
