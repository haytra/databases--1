<?php

namespace Database\Factories;

use App\Models\anggota;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ulasan>
 */
class UlasanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'anggota_id' => anggota::all()->random()->id,
            'rating' => fake()->numberBetween(1, 5),
            'komentar' => fake()->sentence(),
            'image' => fake()->imageUrl(300, 200, 'animals', true, 'Dummy'),
        ];
    }
}
