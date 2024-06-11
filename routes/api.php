<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('client/{phone_number}', [ClientController::class, 'getClientByPhoneNumber']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
