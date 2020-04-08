<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'title' => 'One Love',
            'releaseYear' => '2008',
            'artist_id' => '1'
        ]);

        DB::table('songs')->insert([
            'title' => 'Tsunagu',
            'releaseYear' => '2017',
            'artist_id' => '1'
        ]);

        DB::table('songs')->insert([
            'title' => 'Endless Game',
            'releaseYear' => '2013',
            'artist_id' => '1'
        ]);

        DB::table('songs')->insert([
            'title' => 'Bad Love',
            'releaseYear' => '2019',
            'artist_id' => '2'
        ]);

        DB::table('songs')->insert([
            'title' => 'DEJAVU',
            'releaseYear' => '2018',
            'artist_id' => '2'
        ]);

        DB::table('songs')->insert([
            'title' => 'MAGIC',
            'releaseYear' => '2017',
            'artist_id' => '2'
        ]);

        DB::table('songs')->insert([
            'title' => 'BIRD',
            'releaseYear' => '2019',
            'artist_id' => '3'
        ]);

        DB::table('songs')->insert([
            'title' => 'LIGHTSABER',
            'releaseYear' => '2015',
            'artist_id' => '3'
        ]);

        DB::table('songs')->insert([
            'title' => 'Dancing King',
            'releaseYear' => '2016',
            'artist_id' => '3'
        ]);
    }
}
