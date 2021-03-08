<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'body' => $faker->word,
        'sender_id' => $faker->numberBetween($min = 1, $max = 2),
        'chat_place_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
