<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class supplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('en_EN');

        for ($i = 1; $i <= 30; $i++) {
            DB::table('suppliers') ->insert([
                'kodeSupplier' => '1234' .$i 
                'namaSupplier' => $faker->namaSupplier,
                'alamat' => 'Jl. Imam Bonjol',

            ]);
        }
    }
}
