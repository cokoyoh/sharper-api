<?php

use App\Project;
use Faker\Generator as Faker;

$factory->define(App\Rating::class, function (Faker $faker) {
    $projects = Project::inRandomOrder()->first();
    return [
        "rate" => $faker->randomElement($array = [0,1,2,3,4,5]),
        "project_id" => $projects->id
    ];
});
