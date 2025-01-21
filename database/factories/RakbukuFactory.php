<?php

namespace Database\Factories;

use App\Models\pustakawan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\rakbuku>
 */
class RakbukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pustakawan_id' => pustakawan::all()->unique()->random()->id,
            'norak' => fake()->unique()->randomDigitNotZero(),
        ];
    }
}
