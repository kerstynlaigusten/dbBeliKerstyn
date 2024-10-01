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
    
            for ($i = 1; $i <= 30; $i++) {
                DB::table('suppliers') ->insert([
                    'kodeSupplier' => '1234' .$i,
                    'namaSupplier' => 'Permarta',
                    'alamat' => 'Jl. Imam Bonjol',
    
                ]);
            }
        }
    } 