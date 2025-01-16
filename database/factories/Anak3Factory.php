<?php

namespace Database\Factories;

use App\Models\anak1;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\anak-3>
 */
class Anak3Factory extends Factory
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
            'anak1_id'=>anak1::all()->random()->id,

        ];
    }
}
