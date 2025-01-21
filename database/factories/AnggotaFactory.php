<?php

namespace Database\Factories;

use App\Models\pustakawan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\anggota>
 */
class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'pustakawan_id' => pustakawan::all()->random()->id,
            'alamat' => fake()->address(),
            'noTlp' => fake()->randomNumber(),
            // 'image' => fake()->imageUrl(300, 200, 'animals', true, 'Dummy'),
        ];
    }
}
