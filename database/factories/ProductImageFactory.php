<?php

use Faker\Generator as Faker;
use App\Models\productImage\ProductImage;

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'image' => $faker->image('public/images/products',400,300, null, false),
        'product_id' => App\Models\product\Product::find($faker->numberBetween($min= 1,$max=50)),
    ];
});
