<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\News;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_category' => $this->faker->numberBetween(1, 10), // Misal, kategori dengan ID 1-10
            'title' => $this->faker->sentence(6, true),
            'slug' => function (array $attributes) {
                return Str::slug($attributes['title']);
            },
            'images' => $this->faker->imageUrl(640, 480, 'cats'), // Menghasilkan URL gambar
            'body' => $this->faker->paragraphs(3, true), // Menghasilkan paragraf untuk isi
            'author' => $this->faker->name(),
            'deleted_at' => null, // Misalkan kita tidak menghapus data secara soft delete
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
