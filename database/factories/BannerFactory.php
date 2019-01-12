<?php

use Faker\Generator as Faker;

$factory->define(App\Banner::class, function (Faker $faker) {
    return [
        'tittle' => $faker->name,
        'description' => $faker->text(200),
        'image' => $faker->imageUrl($with = 1000, $height = 400),
        'company_id' => rand(1,1)
    ];
});
