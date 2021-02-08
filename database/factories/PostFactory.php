<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Factory as Faker;


class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create('ru_RU');
        return [
            'name' =>  $faker->realText(rand(25,50),5),
            'text' => $faker->realText(rand(500,3000),5),
            'hits' => rand(1,1000),
            'in_main'=>rand(0,1)
        ];
    }
}
