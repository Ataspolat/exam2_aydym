<?php

namespace Database\Factories;

use App\Models\Song;
use Faker\Generator as Faker;
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
        $factory -> define(Song::class, function (Faker $faker) {
            return [
                'title' => $faker->sentence,
                'album_id' => function () {
                    return Album::inRandomOrder()->first()->id;
                },
                'artist_id' => function () {
                    return Artist::inRandomOrder()->first()->id;
                },
                'genre_id' => function () {
                    return Genre::inRandomOrder()->first()->id;
                },
                'duration' => $faker->numberBetween(120, 600),

            ];
    }
}
