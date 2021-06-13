<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Product::truncate();
        // Category::truncate();
         //\App\Models\User::factory(10)->create();
        $category = \App\Models\Category::create([
            'name'=>'Accessories',
            'description'=>'This category contains Accessories'

        ]);
       Product::factory(5)->create([
           'category_id'=>3
       ]);
        // Product::create([
        //     'product_name'=>'Apple Mobile',
        //     'product_desc'=>'This is an iphone',
        //     'price'=>'1000000000',
        //     'category_id'=>$category->id
        // ]);

    }
}
