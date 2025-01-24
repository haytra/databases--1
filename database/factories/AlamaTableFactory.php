<?php

namespace Database\Factories;
use App\Models\user;
use App\Models\alamat;
use App\Models\kawasan;
use App\Models\pondok;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alamaTable>
 */
class AlamaTableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'alamat_id'=>alamat::all()->random()->id,
            'alama_table_id'=>fake()->randomElement([
             pondok::all()->random()->id,
             kawasan::all()->random()->id,
             user::all()->random()->id,
        ]),
             'alama_type_id'=>fake()->randomElement([
             pondok::class,
             kawasan::class,
             user::class,
        ]),
        
        ];
    }
}
