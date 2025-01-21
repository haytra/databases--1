<?php

namespace Database\Factories;

use App\Models\penulis;
use App\Models\rakbuku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'penulis_id' => penulis::all()->unique()->random()->id,
            'rakbuku_id' => rakbuku::all()->random()->id,
            'judul' => fake()->sentence(),
            'isbn' => fake()->isbn13(),
            'deskripsi' => fake()->paragraph(),
            'tanggalPenerbitan' => fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
        ];
    }
}
