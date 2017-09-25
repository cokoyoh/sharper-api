<?php

use App\Feedback;
use App\Project;
use Faker\Generator as Faker;

$factory->define(Feedback::class, function (Faker $faker) {
    $projects = Project::inRandomOrder()->first();
    return [
        "feedback" => $faker->paragraph(3,true),
        "project_id" => $projects->id,
        "user_id" => $projects->user->id,
    ];
});
