<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            ['name' => 'Pop', 'songs' => [

            ]],
            ['name' => 'Rock', 'songs' => [

            ]],
            ['name' => 'Hip-Hop', 'songs' => [

            ]],
            ['name' => 'Electronic', 'songs' => [

            ]],
        ];

        foreach ($genres as $genre) {
            $g = Genre::create([
                'name' => $genre['name'],
            ]);

            foreach ($genre['songs'] as $song) {
                Song::create([
                    'genre_id' => $g->id,
                    'name' => $song,
                ]);
            }
        }
    }
}
