<?php

use Illuminate\Database\Seeder;
use App\Models\product\Product;
use App\Models\category\Category;
use App\Models\productImage\ProductImage;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* factory(Product::class, 100)->create();
*/
        
    


  
    $categories = factory(Category::class, 5)->create();
    	$categories->each(function ($category) {
    		$products = factory(Product::class, 50)->make();
    		$category->products()->saveMany($products);

    		$products->eahc(function($p){
    			$images = factory(ProductImage::class, 100)->make();
    			$p->images()->saveMany($images)
    		});

    	});

        }
}
