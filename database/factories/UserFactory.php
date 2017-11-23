<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Thread::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => implode(' ', $faker->paragraphs),
        'user_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        }
    ];
});

$factory->define(App\Models\Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph,
        'user_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'thread_id' => function () {
            return factory(App\Models\Thread::class)->create()->id;
        }
    ];
});
