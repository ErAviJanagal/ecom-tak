<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\{Product,Category};
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        $categories = Category::all();

        foreach ($categories as $category) {
            foreach (range(1, 10) as $index) {
                $name = $faker->words(3, true);
                $slug = \Illuminate\Support\Str::slug($name, '-');

                Product::create([
                    'product_name' => $name,
                    'product_slug' => $slug,
                    'product_image' => $faker->imageUrl(),
                    'category_id' => $category->id,
                    'regular_price' => $faker->randomFloat(2, 10, 100),
                    'sale_price' => $faker->randomFloat(2, 5, 90),
                    'description' => $faker->sentence,
                ]);
            }
        }
    }

}
