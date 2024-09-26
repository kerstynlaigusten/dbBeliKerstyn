<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('d_masuks', function (Blueprint $table) {
            $table->id();
            $table->varchar('idMasuk', length: 10); primary();
            $table->int('kodeMasuk', length: 6); foreign();
            $table->int('kodeBarangbeli', length: 6); unique();
            $table->int('jumlah', length: 30); 
            $table->int('subtotal', length: 40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_masuks');
    }
};
