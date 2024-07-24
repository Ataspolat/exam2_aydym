<?php

namespace Database\Seeders;

use App\Models\Album;
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
            ['name' => 'album1'],
            ['name' => 'album2'],
            ['name' => 'album3'],
            ['name' => 'album4'],
        ];

        foreach ($albums as $album) {
            Album::create($album);
        }
    }
}
