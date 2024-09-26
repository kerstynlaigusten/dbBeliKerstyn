<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) {
            DB::table('masuks')->insert([
                'kodeMasuk' => '1234' .$i,
                'tanggalMasuk' => '17121998' ,
                'kodeAdmin' => '1234',
                'kodeSupplier' => '4321',
                'totalMasuk' => '5,000,000',

            ]);
        }
    }
}
