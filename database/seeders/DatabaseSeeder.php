<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Artist::create([
            'name' => 'Tião Carreiro',
        ]);

        \App\Models\Album::create([
            'name' => 'Rei do Gado',
            'release_date'=>'1961-01-01',
            'artist_id'=>1,
        ]);
        \App\Models\Album::create([
            'name' => 'Linha de Frente',
            'release_date'=>'1964-01-01',
            'artist_id'=>1,
        ]);

        \App\Models\Track::create([
            'name' => 'Minas Gerais',
            'release_date' => null,
            'album_order'=>11,
            'duration'=>'00:03:47',
            'album_id'=>1,
            'artist_id'=>1,
        ]);
        \App\Models\Track::create([
            'name' => 'O Mineiro e o Italiano',
            'release_date' => null,
            'album_order'=>1,
            'duration'=>'00:03:21',
            'album_id'=>2,
            'artist_id'=>1,
        ]);
        \App\Models\Track::create([
            'name' => 'Minha prece',
            'release_date' => null,
            'album_order'=>8,
            'duration'=>'00:02:42',
            'album_id'=>1,
            'artist_id'=>1,
        ]);
    }
}
