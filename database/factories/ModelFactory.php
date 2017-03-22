<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Type::class, function (Faker\Generator $faker) {
    return [
        'type_name' => $faker->name,
        'is_show' => rand(0, 1)
    ];
});

$factory->define(App\Models\Article::class, function (Faker\Generator $faker) {
    return [
        'type_id' => 1,
        'title' => $faker->name,
        'img_url' => $faker->imageUrl(710,284),
        'description' => $faker->name,
        'content' => $faker->name
    ];
});


$factory->define(\App\Models\Tag::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});
