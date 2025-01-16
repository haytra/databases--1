<?php

namespace Database\Seeders;

use App\Models\Kake;
use App\Models\nenek;
use App\Models\bapak;
use App\Models\ibu;
use App\Models\anak;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        // 'name' => 'Test User',
        // 'email' => 'test@example.com',
        $kakes = Kake::factory(3)->create();

        foreach ($kakes as $kake) {
            $neneks = nenek::factory(3)->create(['kake_id' => $kake->id]);

            foreach ($neneks as $nenek) {
                $bapaks = bapak::factory(3)->create(['nenek_id' => $nenek->id]);

                foreach ($bapaks as $bapak) {
                    $ibus = ibu::factory(3)->create(['bapak_id' => $bapak->id]);

                    foreach ($ibus as $ibu) {
                        $anaks = anak::factory(3)->create(['ibu_id' => $ibu->id]);

                        // foreach ($desas as $desa) {
                        //     $alamats = Alamat::factory(10)->create(['desa_id' => $desa->id]);

                            for ($i = 0; $i < count($anaks); $i++) {

        // Kake::Factory(100)->create();
        // Nenek::Factory(100)->create();
        // bapak::Factory(100)->create();
        // ibu::Factory(100)->create();
        // anak::Factory(100)->create();
         User::factory(1)->create();
                            }
                        }
                    }
                }
            }
        }
    }

