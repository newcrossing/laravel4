<?php

namespace Database\Seeders;

use App\Models\Tag;
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
        User::factory()
                ->count(1)
                ->has(Post::factory()->count(20))
                ->create();

        // Фабрика для тегов
        Tag::factory()->count(10)->create();
    }
}
