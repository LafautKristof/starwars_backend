<?php

namespace App\Http\Controllers;

use App\Models\Droid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DroidController extends Controller
{
    public function index()
    {
        return response()->json(Droid::all(), 200);
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

        $droid = \App\Models\Droid::create($validated);

        return response()->json($droid, 201);
    }
    public function show($id)
    {
        Log::info("Fetching character with ID: " . $id);
        $droid = Droid::where('_id', $id)->first();

        if (!$droid) {
            return response()->json(['error' => 'Character not found'], 404);
        }

        return response()->json($droid);
    }
}
