<?php

namespace Database\Factories;

use App\Models\buku;
use App\Models\anggota;
use App\Models\rakbuku;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\peminjaman>
 */
class PeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     public function definition(): array
    {
        // Tanggal peminjaman (antara 7 hari lalu sampai hari ini)
        $tanggal_peminjaman = $this->faker->dateTimeBetween('-7 days', 'now');

        // Tanggal pengembalian (antara 1 sampai 7 hari setelah peminjaman)
        $tanggal_pengembalian = Carbon::instance($tanggal_peminjaman)->addDays($this->faker->numberBetween(1, 7));

        $roles = ['dipinjam', 'dikembalikan'];
        return [
            'rakbuku_id' => rakbuku::all()->random()->id,
            'buku_id' => buku::all()->random()->id,
            'anggota_id' => anggota::all()->random()->id,
            'tanggal_peminjaman' => $tanggal_peminjaman->format('Y-d'),
            'tanggal_pengembalian' => $tanggal_pengembalian->format('Y-m-d'),
            'status' => (string) fake()->randomElement($roles),
        ];
    }
}
