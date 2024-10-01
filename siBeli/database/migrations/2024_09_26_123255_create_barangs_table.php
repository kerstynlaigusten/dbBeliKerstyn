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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->integer('hargaJual');
            $table->integer('hargaBeli');
            $table->integer('stok');
            $table->char('status', length: 5);
            $table->integer('satuan');
            $table->char('namaBarang', length: 10);
            $table->integer('kodeBarang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
