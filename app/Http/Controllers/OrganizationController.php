<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrganizationController extends Controller
{
    public function index()
    {
        return response()->json(Organization::all(), 200);
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

        $organization = \App\Models\Organization::create($validated);

        return response()->json($organization, 201);
    }
    public function show($id)
    {
        Log::info("Fetching character with ID: " . $id);
        $organization = Organization::where('_id', $id)->first();

        if (!$organization) {
            return response()->json(['error' => 'Character not found'], 404);
        }

        return response()->json($organization);
    }
}
