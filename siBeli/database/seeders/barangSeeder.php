<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('en_EN');

        for ($i =1; $i <= 10; $i++) {
            DB::table('barangs')->insert([
                'hargaJual' => '10,000' .$i,
                'hargaBeli' => '5,000' .$i,
                'stok' => '10',
                'status' => 'Ada',
                'satuan' => '1kg',
                'namaBarang' => $faker->namaBarang,
                'kodeBarang' => '1234',
            ]);
        }
    }
}
