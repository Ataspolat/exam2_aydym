<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function showMusic($id)
    {
        $music = Song::findOrFail($id);
        return response()->file(public_path('music/' . $music->file_path));
    }

}
