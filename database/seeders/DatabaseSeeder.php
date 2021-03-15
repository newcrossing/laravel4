<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Lavel;
use App\Models\Tag;
use App\Models\Tag2;
use App\Models\User2;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

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

        //Post::factory()->count(1)->create();

        Log::info('Начало заполнения');

        //Tag::factory()->count(1)->create();
        foreach (Tag2::all() as $tag2) {
            Tag::create(
                    [
                            'id' => $tag2->id,
                            'name' => $tag2->Name_Tag,
                            'hits' => $tag2->Hits_Tag,
                            'active' => 1,
                    ]
            );
        }

        Log::info('Таблица Tags заполнена');

        //Lavel::factory()->count(10)->create();


        /*
                foreach (User2::all() as $user2) {
                    User::create(
                            [
                                    'id' => $user2->id,
                                    'name' => trim($user2->Name_User.' '.$user2->LastName_User),
                                    'login' => $user2->Login_User,
                                    'sex' => $user2->Pol_User,
                                    'city' => (string)$user2->City_User,
                                    'foto' => (string)$user2->Foto_User,
                                    'about' => (string)$user2->OSebe_User,
                                    'ip' => $user2->Ip_User,
                                    'notify_vst' => (int)$user2->UvedVst_User,
                                    'notify_edit' => (int)$user2->UvedEdit_User,
                                    'notify_edit' => (int)$user2->UvedEdit_User,
                                    'notify_doc' => (int)$user2->UvedDoc_User,
                                    'rang' => (int)$user2->Rang_User,
                                    'rating' => $user2->Rating_User,
                                    'birthday' => $user2->DateRog_User,
                                    'last_visit' => $user2->DateTimeLastVisit_User,
                                    'email' => $user2->Email_User,
                                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                                    'remember_token' => Str::random(10),
                                    'active' => 1,
                            ]
                    );
                }
        */
        /* foreach (Content::where('ShortName_Content', '')->get() as $content) {
             Post::create(
                     [
                             'id' => $content->id,
                             'user_id' => $content->IdUser_Content,
                             'lavel_id' => 2,
                             'name' => $content->Name_Content,
                             'text' => $content->Text_Content,
                             'active' => 1,
                             'hits' => $content->Hits_Content,
                             'notify' => 2,
                             'status' => 1,
                             'meta_description' => '',
                             'meta_title' => '',
                             'in_main' => 1,
                             'date_public' => $content->DateNPub_Content,
                             'date_public' => $content->DateNPub_Content,
                     ]
             );
         }*/
    }
}
