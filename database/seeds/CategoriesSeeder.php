<?php

use App\Categories;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $newCategories = new Categories();
            $newCategories->name = $faker->words();
            $newCategories->Save();
        }
    }
}
