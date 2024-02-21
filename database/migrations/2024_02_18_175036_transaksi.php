<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('table_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('id_barang')->nullable();
            $table->integer('harga')->nullable();
            $table->integer('stok')->nullable();
            $table->date('tgl_transaksi')->nullable();
            $table->bigInteger('total_bayar')->nullable();
            $table->bigInteger('kembalian')->nullable();
            $table->bigInteger('uang_pembeli')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_transaksi');
    }
};
