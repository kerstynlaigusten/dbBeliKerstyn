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
            $table->int('hargaJual', length: 10) ->primary();
            $table->int('hargaBeli', length: 10) ->foreign();
            $table->int('stok', length: 30);
            $table->char('status', length: 5);
            $table->int('satuan', length: 5);
            $table->varchar('namaBarang', length: 10) ->unique();
            $table->int('kodeBarang', length: 6) ->unique();
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
