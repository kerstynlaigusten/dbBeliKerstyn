<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class d_masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i =1; $i <=20; $i++) {
            DB::table('d_masuks')->insert([
                'idMasuk' => '1234' .$i,
                'kodeMasuk' => '1234',
                'kodeBarangbeli' => '1234',
                'jumlah' => '5,000,000',
                'subtotal' => '5,000,000',
            ]);
        }
    }
}
