<?php

namespace Database\Seeders;

use App\Models\Artist;
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
        $artists = [
            ['name' => 'Michael Jackson', 'albums' => [

            ]],
            ['name' => 'Madonna', 'albums' => [

            ]],
            ['name' => 'Eminem', 'albums' => [

            ]],
            ['name' => 'Ceza', 'albums' => [

            ]],
        ];
        for ($i = 0; $i < count($artists); $i++) {
            $a = Artist::create([
                'name' => $artists[$i]['name'],

            ]);

            for ($j = 0; $j < count($artists[$i]['albums']); $j++) {
                Album::create([
                    'artist_id' => $a->id,
                    'name' => $artists[$i]['albums'][$j],

                ]);
            }
        }
    }
}
