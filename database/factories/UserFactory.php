<?php

namespace Database\Factories;

use App\Models\ibu;
use App\Models\anak;
use App\Models\kake;
use App\Models\bapak;
use App\Models\nenek;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            // 'name'=>fake()->name(),
            // 'name'=>fake()->name(),
            'kake_id'=>kake::all()->random()->id,
            'nenek_id'=>nenek::all()->random()->id,
            'bapak_id'=>bapak::all()->random()->id,
            'ibu_id'=>ibu::all()->random()->id,
            'anak_id'=>anak::all()->random()->id,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
