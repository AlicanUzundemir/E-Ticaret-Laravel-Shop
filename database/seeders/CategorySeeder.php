<?php

namespace Database\Seeders;

use App\Models\Category;
use DB;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category::truncate();
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            /*            \DB::table('categories')->insert([
                            'name' => $faker->name,
                            'slug' => $faker->slug,
                            'is_active' => '0',
                        ]);*/
            /*            $title = $faker->name;
                        $slug = Str::slug($title);
                        Category::create([
                            'name' => $title,
                            'slug' => $slug,
                            'is_active' => (string)rand(0, 1)
                        ]);*/
        }
        // $faker = Factory::create();
        // for ($i=0; $i <10 ; $i++) { 
        //     DB::table('categories')->insert([
        //         'name'=>$faker->name,
        //         'slug'=>$faker->slug,
        //         'up_id' =>'1',
        //         'is_active'=> '0',
        //     ]);
        // }
        
        $category = Category::create(['name' => 'Electronics', 'slug' => 'electronics', 'up_id' => 0, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Cameras','slug' => 'cameras','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Computer,Tablets & Laptop','slug' => 'computer-tablets-laptop', 'up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Mobile Phone','slug' => 'mobile_phone','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Sound & Vision','slug' => 'sound-vision','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);

        $category = Category::create(['name' => 'Clothes', 'slug' => 'clothes', 'up_id' => 0, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Womens Clothing(45)','slug' => 'womens_clothing','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Womens Shoes (8)','slug' => 'womens_shoes', 'up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Womens Hand Bags(23)','slug' => 'womens_hangs_bags','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Mens Clothing(45)','slug' => 'mens_clothing','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Mens Shoes(102)','slug' => 'mens_shoes','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Kids Clothing(12)','slug' => 'kids_clothing','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Kids Shoes(52)','slug' => 'kids_shoes','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);

        $category = Category::create(['name' => 'Food &  Beverages', 'slug' => 'food-beverages', 'up_id' => 0, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Angoves(35)','slug' => 'angoves','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Bouchard Aine & Fils (8)','slug' => 'bouchard_aine_fils', 'up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'French Rabbit (5)','slug' => 'french_rabbit','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Louis Bernard (45)','slug' => 'louis_bernard','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'BIB Wine (Bag in Box) (8)','slug' => 'bib_wine','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Other Liquors & Wine (5)','slug' => 'other_liquors_wine','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Garden (3)','slug' => 'garden','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Khao Shong (11)','slug' => 'khao_shong','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        $category = Category::create(['name' => 'Health & Beauty', 'slug' => 'health-beauty', 'up_id' => 0, 'is_active' => (string)rand(0, 1)]);

        $category = Category::create(['name' => 'Sports & Leisure', 'slug' => 'sports-leisure', 'up_id' => 0, 'is_active' => (string)rand(0, 1)]);

        $category = Category::create(['name' => 'Sports &  Entertainments', 'slug' => 'sports-entertainments', 'up_id' => 0, 'is_active' => (string)rand(0, 1)]);
    }
}
