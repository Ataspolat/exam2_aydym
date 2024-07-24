<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artists = [

            'Playlist1',
            'Playlist2',
            'Playlist3',
            'Playlist4'

        ];


        foreach ($artists as $artist) {
            Artist::create(['name' =>  $artist]);
        }

    }
}
