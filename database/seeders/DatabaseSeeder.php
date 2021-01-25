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
     //    \App\Models\User::factory(10)->create();
     //  \App\Models\Post::factory(10)->create();

       // $users = User::factory()->count(3)->make();

       // factory(App\Models\User::class)->create();

      //  User::factory()->create();
       // Post::factory()->count(10)->create();

        $user = User::factory()
            ->count(5)
            ->has(Post::factory()->count(3000))
            ->create();
    }
}
