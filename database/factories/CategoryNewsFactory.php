<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CategoryNews;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryNews>
 */
class CategoryNewsFactory extends Factory
{

    protected  $model = CategoryNews::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'slug' => function (array $attributes) {
                return Str::slug($attributes['title']);
            },
            'title' => $this->faker->sentence(6, true),
            'images' => $this->faker->imageUrl(640, 480, 'cats'),
        ];
    }
}
