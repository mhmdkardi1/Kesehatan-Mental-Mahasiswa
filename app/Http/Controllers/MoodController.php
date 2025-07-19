<?php

namespace App\Http\Controllers;

use App\Models\Mood;
use Illuminate\Http\Request;

class MoodController extends Controller
{
    public function checkIn(Request $request)
    {
        $request->validate([
            'mood' => 'required|string|max:50',
            'catatan' => 'nullable|string',
        ]);

        $mood = Mood::create([
            'user_id' => auth()->id(),
            'mood' => $request->mood,
            'catatan' => $request->catatan,
        ]);

        return response()->json([
            'message' => 'Mood check-in berhasil',
            'data' => $mood,
        ], 201);
    }

    public function history()
    {
        $moods = Mood::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();

        return response()->json([
            'message' => 'Riwayat mood',
            'data' => $moods,
        ]);
    }
}
