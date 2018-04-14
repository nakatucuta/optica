<?php

use Illuminate\Database\Seeder;
use App\Models\productImage\ProductImage;
class ProductsImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductImage::class, 30)->create();
    }
}
