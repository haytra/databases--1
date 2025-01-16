<?php

namespace Database\Factories;

use App\Models\anak;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\anak-2>
 */
class Anak2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'anak1_id'=>anak::all()->random()->id,
        ];
    }
}
