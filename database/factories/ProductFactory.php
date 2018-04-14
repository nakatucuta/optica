<?php

use Faker\Generator as Faker;
use App\Models\product\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
    	'name' => $faker->name,
    	'description' => $faker->sentence(10),
    	'long_description' => $faker->text,
    	'price' => rand(1,1000000000),
    	'quantity' =>$faker->numberBetween(1,100),
    	'category_id' =>$faker->numberBetween(1,5),
    	'legal_entity_id' =>$faker->numberBetween(1,5),

        
    ];
});
