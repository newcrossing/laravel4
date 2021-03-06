<?php

namespace Database\Seeders;

use App\Models\Lavel;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

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
      //  User::factory()
         //       ->count(1)
         //       ->has(Post::factory()->count(20))
          //      ->create();

        // Фабрика для тегов
        User::factory()->count(1)->create();
        Tag::factory()->count(1)->create();


        Lavel::factory()->count(10)->create();





        //$tag = new Tag(['name' => 'Foo bar.']);

        //Find the video to insert into a tag
       // $video = Video::find(1);

        //In the tag relationship, save a new video
       // $tag->videos()->save($video);
    }
}
