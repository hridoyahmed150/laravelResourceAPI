<?php

use Faker\Generator as Faker;

$factory->define(App\posts::class, function (Faker $faker) {
    return [
        //
        'title'		=>	$faker->text(30),
        'content'	=>	$faker->text(150)
    ];
});
