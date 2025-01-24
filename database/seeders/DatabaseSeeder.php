<?php

namespace Database\Seeders;

use App\Models\desa;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\kota;
use App\Models\User;
use App\Models\alamat;
use App\Models\negara;
use App\Models\pondok;
use App\Models\kawasan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   

        $negaras = negara::factory(5)->create();

           foreach($negaras as $negara){
                 $kotas = kota::factory(5)->create([
                    'negara_id'=>$negara->id,]);
            foreach($kotas as $kota){
                $desas = desa::factory(5)->create([
                    'kota_id'=>$kota->id,]);
            foreach($desas as $desa){
                $alamats = alamat::factory(5)->create([
                    'desa_id'=>$desa->id,]);
                    for($i = 0; $i < count($alamats);$i++){
                        pondok::factory()->create();
                        kawasan::factory()->create();
                        user::factory()->create();
                    }
                }
            }
        }
    }
}
