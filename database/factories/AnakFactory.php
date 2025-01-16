<?php

namespace Database\Factories;

use App\Models\ibu;
use App\Models\kake;
use App\Models\bapak;
use App\Models\nenek;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\anak>
 */
class AnakFactory extends Factory
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
            'kake_id'=>kake::all()->random()->id,
            'nenek_id'=>nenek::all()->random()->id,
            'bapak_id'=>bapak::all()->random()->id,
            'ibu_id'=>ibu::all()->random()->id,
        ];
    }
}
