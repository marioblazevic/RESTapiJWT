<?php

namespace Database\Seeders;

use App\Models\Post;
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
        Post::create(['title' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots', 'user_id' => 1]);
        Post::create(['title' => 'd scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially un', 'user_id' => 1]);
        Post::create(['title' => ' at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and ', 'user_id' => 1]);
        Post::create(['title' => 'humour, or randomised words which dont look even slightly believable.', 'user_id' => 2]);
        Post::create(['title' => 'ages and web page editors now use Lorem Ipsum as their default model te', 'user_id' => 2]);
        Post::create(['title' => 'tin words, combined with a handful of model sentence structures, to gene', 'user_id' => 2]);
    }
}
