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
        Category::create(['name' => 'Computer,Tablets & Laptop','slug' => 'computer,tablets & laptop', 'up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Mobile Phone','slug' => 'mobile phone','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);
        Category::create(['name' => 'Sound & Vision','slug' => 'sound & vision','up_id' => $category->id, 'is_active' => (string)rand(0, 1)]);

        $category = Category::create(['name' => 'Clothes', 'slug' => 'clothes', 'up_id' => 0, 'is_active' => (string)rand(0, 1)]);

        $category = Category::create(['name' => 'Food &  Beverages', 'slug' => 'food & beverages', 'up_id' => 0, 'is_active' => (string)rand(0, 1)]);

        $category = Category::create(['name' => 'Health & Beauty', 'slug' => 'health & beauty', 'up_id' => 0, 'is_active' => (string)rand(0, 1)]);

        $category = Category::create(['name' => 'Sports & Leisure', 'slug' => 'sports & leisure', 'up_id' => 0, 'is_active' => (string)rand(0, 1)]);

        $category = Category::create(['name' => 'Sports &  Entertainments', 'slug' => 'sports &  entertainments', 'up_id' => 0, 'is_active' => (string)rand(0, 1)]);
    }
}
