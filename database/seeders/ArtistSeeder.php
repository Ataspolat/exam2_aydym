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

            'Michael Jackson',
            'Madonna',
            'Eminem',
            'Daft Punk'

        ];


        foreach ($artists as $artist) {
            Artist::create(['name' =>  $artist]);
        }

    }
}
