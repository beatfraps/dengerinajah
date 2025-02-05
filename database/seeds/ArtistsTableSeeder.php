<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('artists')->insert([
            'name' => 'Arashi',
            'country'=> 'Japan'
        ]);

        DB::table('artists')->insert([
            'name' => 'AAA',
            'country'=> 'Japan'
        ]);

        DB::table('artists')->insert([
            'name' => 'EXO',
            'country'=> 'Korea'
        ]);
    }
}
