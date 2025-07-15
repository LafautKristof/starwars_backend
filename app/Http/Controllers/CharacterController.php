<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use Illuminate\Support\Facades\Log;

class CharacterController extends Controller
{
    public function index()
    {
        return $characters = Character::all();
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
}
