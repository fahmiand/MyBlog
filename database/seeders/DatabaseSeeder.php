<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use PhpParser\Builder\Use_;

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
            'name' => 'ahmad Fahmi Andrian',
            'username' => 'fahmi',
            'email' => 'Fahmi12@gmail.com',
            'password' => bcrypt('password')
        ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'ayam',
            'slug' => 'ayam'
        ]);

        Category::create([
            'name' => 'bebek',
            'slug' => 'bebek'
        ]);

        Category::create([
            'name' => 'ikan',
            'slug' => 'ikan'
        ]);

        Post::factory(40)->create();
    }
}
