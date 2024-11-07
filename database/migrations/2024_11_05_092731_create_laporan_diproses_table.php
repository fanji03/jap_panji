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
    Schema::create('laporan_diproses', function (Blueprint $table) {
        $table->id();
        $table->date('tanggal'); // Kolom untuk tanggal
        $table->string('jenis');  // Kolom untuk jenis laporan
        $table->string('status');  // Kolom untuk status laporan
        $table->timestamps();      // Kolom untuk timestamps created_at dan updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_diproses');
    }
};
