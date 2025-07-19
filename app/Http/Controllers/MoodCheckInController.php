<?php

namespace App\Http\Controllers;

use App\Models\MoodCheckIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MoodCheckInController extends Controller
{
    public function index()
    {
        $moods = MoodCheckIn::where('user_id', Auth::id())->latest()->get();
        return response()->json($moods);
    }

    public function store(Request $request)
    {
        $request->validate([
            'mood' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $mood = MoodCheckIn::create([
            'user_id' => Auth::id(),
            'mood' => $request->mood,
            'description' => $request->description,
        ]);

        return response()->json([
            'message' => 'Mood berhasil disimpan.',
            'data' => $mood,
        ], 201);
    }
}
