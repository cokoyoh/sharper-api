<?php

use App\Project;
use App\State;
use App\User;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    $user = User::inRandomOrder()->first();
    $state = State::inRandomOrder()->first();
    return [
        "title" => $faker->sentence(6),
        "description" => $faker->paragraph(3,true),
        "duration" => $faker->numberBetween(1,10),
        "user_id" =>  $user->id,
        'state_id' => $state->id
    ];
});
