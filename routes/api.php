<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

Route::post('/characters', [CharacterController::class, 'store']);
Route::post("/creatures", [CreatureController::class, 'store']);
Route::post("/droids", [DroidController::class, 'store']);
Route::post("/locations", [LocationController::class, 'store']);
Route::post("/organizations", [OrganizationController::class, 'store']);
Route::post("/species", [SpecieController::class, 'store']);
Route::post("/vehicles", [VehicleController::class, 'store']);
