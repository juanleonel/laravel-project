<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'view' => $faker->name,
        'mission' => $faker->sentence(4),
        'description_view' => $faker->sentence(4),
        'description_mission' => $faker->sentence(4),
        'email' => $faker->unique()->safeEmail,
        'link_facebook' => $faker->text(50),
        'image_view' => $faker->imageUrl($with = 1000, $height = 400)
    ];
});
