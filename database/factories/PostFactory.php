<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Posts;
use App\Models\Users;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'img_url' => 'https://picsum.photos/600',
        'id_user' => $faker->numberBetween(1, Users::count())
    ];
});
