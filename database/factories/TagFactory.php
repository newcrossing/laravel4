<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;


class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        $faker = Faker::create('ru_RU');
//        return [
//            'name' =>  $faker->text(10),
//            'hits' => $faker->numberBetween(1,50)
//        ];



    }
}
