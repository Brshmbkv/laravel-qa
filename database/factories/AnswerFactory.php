<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Answer;
use App\User;
use Faker\Generator as Faker;

$factory->define('App\Answer', function (Faker $faker) {
    return [
        'body' => $faker->paragraph(rand(3,7), true),
        'user_id' => User::pluck('id')->random(),
        'votes_count' => rand(0,5),
    ];
});
