<?php

use Faker\Generator as Faker;
use App\Models\category\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        
        'name'=> ucfirst($faker->word),
        'description'=> $faker->sentence(10),
    ];
});
