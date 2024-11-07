<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('laporan_selesai', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_laporan');
            $table->string('jenis_laporan');
            $table->string('status_laporan')->default('Sedang Diproses');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_selesai');
    }
};
