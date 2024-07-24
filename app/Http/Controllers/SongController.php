<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::with('artists','albums','gneres')
            ->inRandomOrder()
            ->get();

        return view('home.index')
            ->with([
                'songs' => $songs,
            ]);
    }
}
