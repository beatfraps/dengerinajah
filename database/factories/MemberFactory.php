<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'id' => $faker->text(10),
        'name' => $faker->name(20),
        'joinedDate' => Carbon::now()
    ];
});
