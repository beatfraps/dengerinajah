<?php

use Illuminate\Database\Seeder;
use App\Member;


class membersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
    		'id' => 'rinsherin15',
    		'name' => 'Sherina',
            'joinedDate' => Carbon\Carbon::now()
    	]);

    	DB::table('members')->insert([
    		'id' => 'matsujun',
    		'name' => 'Matsumoto Jun',
            'joinedDate' => Carbon\Carbon::now()
    	]);

    	DB::table('members')->insert([
    		'id' => 'nino',
    		'name' => 'Ninomiya Kazunari',
            'joinedDate' => Carbon\Carbon::now()
    	]);

    }
}
