<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function ($faker) {
    return [
        'title'   => $faker->sentence,
        'content' => $faker->paragraph,
        'user_id' => function () {
            $user_count = App\User::all()->count();
            if (($random = rand(1, $user_count)) > ($user_count - $user_count / 5)) {
                return factory(App\User::class)->create()->id;
            }else{
                return $random;
            }
        }
    ];
});
