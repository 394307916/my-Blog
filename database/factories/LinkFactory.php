<?php

use Faker\Generator as Faker;

$factory->define(App\Link::class, function (Faker $faker) {
    $date_time = $faker->date.' '.$faker->time;
    return [
    	'name' =>$faker->name,
        'address' => $faker->text(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
