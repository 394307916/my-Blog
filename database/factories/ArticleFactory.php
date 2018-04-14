<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
	$date_time = $faker->date.' '.$faker->time;
    return [
    	'author' => $faker->name,
    	'title' => $faker->name,
    	'description' => $faker->name,
        'content' => $faker->text(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
