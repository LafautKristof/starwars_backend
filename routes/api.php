<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CreatureController;
use App\Http\Controllers\DroidController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\SpecieController;
use App\Http\Controllers\VehicleController;

Route::post('/characters', [CharacterController::class, 'store']);
Route::post("/creatures", [CreatureController::class, 'store']);
Route::post("/droids", [DroidController::class, 'store']);
Route::post("/locations", [LocationController::class, 'store']);
Route::post("/organizations", [OrganizationController::class, 'store']);
Route::post("/species", [SpecieController::class, 'store']);
Route::post("/vehicles", [VehicleController::class, 'store']);


Route::get("/characters", [CharacterController::class, 'index']);
Route::get("/characters/{id}", [CharacterController::class, 'show']);

Route::get("/creatures", [CreatureController::class, 'index']);
Route::get("/creatures/{id}", [CreatureController::class, 'show']);

Route::get("/droids", [DroidController::class, 'index']);
Route::get("/droids/{id}", [DroidController::class, 'show']);

Route::get("/locations", [LocationController::class, 'index']);
Route::get("/locations/{id}", [LocationController::class, 'show']);

Route::get("/organizations", [OrganizationController::class, 'index']);
Route::get("/organizations/{id}", [OrganizationController::class, 'show']);

Route::get("/species", [SpecieController::class, 'index']);
Route::get("/species/{id}", [SpecieController::class, 'show']);

Route::get("/vehicles", [VehicleController::class, 'index']);
Route::get("/vehicles/{id}", [VehicleController::class, 'show']);
