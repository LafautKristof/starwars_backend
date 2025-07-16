<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use Illuminate\Support\Facades\Log;

class CharacterController extends Controller
{
    public function index()
    {
        return response()->json(Character::all(), 200);
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

        $character = \App\Models\Character::create($validated);

        return response()->json($character, 201);
    }

    public function show($id)
    {
        Log::info("Fetching character with ID: " . $id);
        $character = Character::where('_id', $id)->first();

        if (!$character) {
            return response()->json(['error' => 'Character not found'], 404);
        }

        return response()->json($character);
    }
}
