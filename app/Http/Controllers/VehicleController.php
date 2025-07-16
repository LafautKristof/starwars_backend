<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VehicleController extends Controller
{
    public function index()
    {
        return response()->json(Vehicle::all(), 200);
    }
    public function store(Request $request)
    {
        Log::info($request);
        $validated = $request->validate([
            '_id' => 'required|string',
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|string',
        ]);

        $vehicle = \App\Models\Vehicle::create($validated);

        return response()->json($vehicle, 201);
    }
    public function show($id)
    {
        Log::info("Fetching character with ID: " . $id);
        $vehicle = Vehicle::where('_id', $id)->first();

        if (!$vehicle) {
            return response()->json(['error' => 'Character not found'], 404);
        }

        return response()->json($vehicle);
    }
}
