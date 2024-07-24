<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Genre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $artists = Artist::with('albums')
            ->orderBy('name')
            ->get();

        $genres = Genre::with('songs')
            ->orderBy('name')
            ->get();



        return view('home.index')
            ->with([
                'brands' => $artists,
                'popular' => $genres,
                'discount' => $discount,
            ]);
    }
}
