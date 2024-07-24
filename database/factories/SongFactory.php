<?php

namespace Database\Factories;

use App\Models\Song;
use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $album = Album::inRandomOrder()->first()->id;
        $artist = Artist::inRandomOrder()->first()->id;
        $genre = Genre::inRandomOrder()->first()->id;
        return [
            'title' => fake()->sentence,
            'album_id' => $album,
            'artist_id' => $artist,
            'genre_id' => $genre,

        ];
    }
}
