<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductDetail;
use DB;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Str as Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i=0; $i <40 ; $i++) { 
            
            $name = $faker->sentence(2);
            $stock = $faker->randomNumber(2);
            $product = Product::create([
                'name'=>$name,
                'slug'=>Str::slug($name),
                'description'=>$faker->paragraph,
                'price'=>$faker->latitude(0,90),
                'stock'=>$stock,
                'remain'=>$stock,
            ]);

            $categoryId = rand(1, 16);
            $product->categories()->attach($categoryId);

            ProductDetail::create([
                'product_id' => $product->id,
                'slider' => (boolean)rand(0, 1),
                'featured' => (boolean)rand(0, 1),
                'latest' => (boolean)rand(0, 1),
                
            ]);
            

        }
    }
}
