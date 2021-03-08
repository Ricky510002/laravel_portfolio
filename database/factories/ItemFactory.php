<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\Model;
use Faker\Generator as Faker;
use App\Models\Items;

$factory->define(Items::class, function (Faker $faker) {
    return [
        
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
        'item_title' => $faker->word,
        'price' => $faker->numberBetween($min = 300, $max = 3000),
        'item_explanation' => $faker->realText,
        'item_state' => '書き込みなし',
        'school_name' => $faker->word,
        'shipping' => '送料込み（出品者負担）',
        'from_where' => $faker->city,
        // 'buyer_id' => $faker->numberBetween($min = 1, $max = 10),
        
        
    ];
});
