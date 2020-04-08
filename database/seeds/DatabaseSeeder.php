<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		DB::table('subscriptions')->insert([
    		'member_id' => 'rinsherin15',
    		'artist_id' => '1',
            'since' => Carbon\Carbon::now()
    	]);

    	DB::table('subscriptions')->insert([
    		'member_id' => 'rinsherin15',
    		'artist_id' => '2',
            'since' => Carbon\Carbon::now()
    	]);

    	DB::table('subscriptions')->insert([
    		'member_id' => 'matsujun',
    		'artist_id' => '1',
            'since' => Carbon\Carbon::now()
    	]);

    	DB::table('subscriptions')->insert([
    		'member_id' => 'nino',
    		'artist_id' => '3',
            'since' => Carbon\Carbon::now()
    	]);
    }
}
