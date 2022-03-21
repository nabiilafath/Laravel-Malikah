<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'bambang subroto',
            'username' => 'pakbambang',
            'email' => 'bambangsubroto@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::factory(2)->create();

        Category::create([
            'name' => 'Malikah Bakery',
            'slug' => 'malikah-bakery'
        ]);
        Category::create([
            'name' => 'Malikah Food',
            'slug' => 'malikah-food'
        ]);
        Category::create([
            'name' => 'Malikah Drink',
            'slug' => 'malikah-drink'
        ]);

        Post::factory(2)->create();
    }
}
