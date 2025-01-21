<?php

namespace Database\Seeders;

use App\Models\buku;
use App\Models\User;
use App\Models\anggota;
use App\Models\peminjaman;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\penulis;
use App\Models\pustakawan;
use App\Models\rakbuku;
use App\Models\ulasan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $pustakawans = pustakawan::factory(10)->create();
        $anggotas = anggota::factory(100)->create();
        $rakbukus = rakbuku::factory(9)->create();

        $penuliss = penulis::factory(50)->create();
        // $bukus = buku::factory(150)->create();
        foreach($penuliss as $penulis) {
            $bukus = buku::factory(3)->create();

            foreach($bukus as $buku) {
                $peminjamans = peminjaman::factory(1)->create();
            }
        }

        $ulasans = ulasan::factory(10)->create();

    }
}
