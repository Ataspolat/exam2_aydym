<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }

    public function create()
    {
        return view('genres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Diğer validasyon kuralları buraya eklenebilir
        ]);

        Genre::create([
            'name' => $request->input('name'),
            // Diğer alanlar buraya eklenebilir
        ]);

        return redirect()->route('genres.index')->with('success', 'Genre created successfully.');
    }

    public function edit(Genre $genre)
    {
        return view('genres.edit', compact('genre'));
    }

    public function update(Request $request, Genre $genre)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Diğer validasyon kuralları buraya eklenebilir
        ]);

        $genre->update([
            'name' => $request->input('name'),
            // Diğer alanlar buraya eklenebilir
        ]);

        return redirect()->route('genres.index')->with('success', 'Genre updated successfully.');
    }

    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('genres.index')->with('success', 'Genre deleted successfully.');
    }
}
