<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    public function create()
    {
        return view('albums.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            // Diğer validasyon kuralları buraya eklenebilir
        ]);

        Album::create([
            'title' => $request->input('title'),
            // Diğer alanlar buraya eklenebilir
        ]);

        return redirect()->route('albums.index')->with('success', 'Album created successfully.');
    }

    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            // Diğer validasyon kuralları buraya eklenebilir
        ]);

        $album->update([
            'title' => $request->input('title'),
            // Diğer alanlar buraya eklenebilir
        ]);

        return redirect()->route('albums.index')->with('success', 'Album updated successfully.');
    }

    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('albums.index')->with('success', 'Album deleted successfully.');
    }
}
