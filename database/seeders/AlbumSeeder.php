<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $albums = [
            'album1',
            'album2',
            'album3',
            'album4',
        ];

        foreach ($albums as $album) {
            Album::create(['name' =>  $album,]);
        }
    }
}
