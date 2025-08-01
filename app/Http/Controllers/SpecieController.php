<?php

namespace App\Http\Controllers;

use App\Models\Specie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SpecieController extends Controller
{
    public function index()
    {
        return response()->json(Specie::all(), 200);
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

        $specie = \App\Models\Specie::create($validated);

        return response()->json($specie, 201);
    }
    public function show($id)
    {
        Log::info("Fetching character with ID: " . $id);
        $specie = Specie::where('_id', $id)->first();

        if (!$specie) {
            return response()->json(['error' => 'Character not found'], 404);
        }

        return response()->json($specie);
    }
}
