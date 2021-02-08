<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
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

        // создаю фабрику для пользователей   - постов
        $user = User::factory()
            ->count(1)
            ->has(Post::factory()->count(20))
            ->create();
    }
}
