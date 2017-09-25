<?php

use App\Project;
use Faker\Generator as Faker;

$factory->define(App\State::class, function (Faker $faker) {
    return [
        'status' => $faker->randomElement($array = [0,1]),
    ];
});
