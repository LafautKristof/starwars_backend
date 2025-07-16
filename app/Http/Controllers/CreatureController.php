<?php

namespace App\Http\Controllers;

use App\Models\Creature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CreatureController extends Controller
{
    public function index()
    {
        return response()->json(Creature::all(), 200);
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

        $creature = \App\Models\Creature::create($validated);

        return response()->json($creature, 201);
    }
    public function show($id)
    {
        Log::info("Fetching character with ID: " . $id);
        $creature = Creature::where('_id', $id)->first();

        if (!$creature) {
            return response()->json(['error' => 'Character not found'], 404);
        }

        return response()->json($creature);
    }
}
