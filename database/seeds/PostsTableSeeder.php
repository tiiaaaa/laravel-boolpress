<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 6; $i ++){
            $newPost = new Post();
            $newPost->name = $faker->word();
            $newPost->description = $faker->paragraph();
            $newPost->url_immage = $faker->imageUrl(640, 480, 'animals', true);
            $newPost->pubblication_date = $faker->date();
            $newPost->save();
        }
    }
}
