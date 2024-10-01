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
            $table->char('idMasuk', length: 10);
            $table->integer('kodeMasuk');
            $table->integer('kodeBarangbeli');
            $table->integer('jumlah'); 
            $table->integer('subtotal');
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
