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
        Schema::create('masuks', function (Blueprint $table) {
            $table->id();
            $table->int('kodeMasuk', length: 6); primary();
            $table->int('tanggalMasuk', length: 6); unique();
            $table->int('kodeAdmin', length: 6); unique();
            $table->int('kodeSupplier', length: 6); foreign();
            $table->int('totalMasuk', length: 30); unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masuks');
    }
};
