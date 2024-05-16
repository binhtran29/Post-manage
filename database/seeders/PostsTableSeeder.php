<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i < 20; $i++) { 
            Post::create([
                'post_name' => $faker->sentence(3,true),
                'category_id' => $faker->numberBetween(1, 10),
                'content' => $faker->paragraph(2,true)
            ]);
        }
    }
}
