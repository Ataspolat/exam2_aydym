<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
            'album_id' => 'nullable|exists:albums,id',
            // Diğer validasyon kuralları buraya eklenebilir
        ]);

        Song::create([
            'title' => $request->input('title'),
            'artist_id' => $request->input('artist_id'),
            'album_id' => $request->input('album_id'),
            // Diğer alanlar buraya eklenebilir
        ]);

        return redirect()->route('songs.index')->with('success', 'Song created successfully.');
    }

    public function edit(Song $song)
    {
        return view('songs.edit', compact('song'));
    }

    public function update(Request $request, Song $song)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
            'album_id' => 'nullable|exists:albums,id',
            // Diğer validasyon kuralları buraya eklenebilir
        ]);

        $song->update([
            'title' => $request->input('title'),
            'artist_id' => $request->input('artist_id'),
            'album_id' => $request->input('album_id'),
            // Diğer alanlar buraya eklenebilir
        ]);

        return redirect()->route('songs.index')->with('success', 'Song updated successfully.');
    }

    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('songs.index')->with('success', 'Song deleted successfully.');
    }
}
