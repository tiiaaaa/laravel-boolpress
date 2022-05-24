<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Model\Category;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //! prendo tutti gli id disponibili in categories
        $category_ids = Category::pluck('id')->toArray();

        //!prendo tutti in post
        $posts = Post::all();

        foreach ($posts as $post) {
            $post->categories()->attach($faker->randomElement($category_ids));
        }
    }
}
