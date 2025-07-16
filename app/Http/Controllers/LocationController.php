<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LocationController extends Controller
{
    public function index()
    {
        return response()->json(Location::all(), 200);
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

        $location = \App\Models\Location::create($validated);

        return response()->json($location, 201);
    }
    public function show($id)
    {
        Log::info("Fetching character with ID: " . $id);
        $location = Location::where('_id', $id)->first();

        if (!$location) {
            return response()->json(['error' => 'Character not found'], 404);
        }

        return response()->json($location);
    }
}
