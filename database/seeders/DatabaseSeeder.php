<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
            'name'     => 'Pedro de Robles',
            'email'    => 'pedro@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        Post::factory()->count(24)->create();
    }
}
