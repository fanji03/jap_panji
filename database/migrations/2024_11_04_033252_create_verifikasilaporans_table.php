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
        Schema::create('verifikasilaporans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_laporan');
            $table->string('jenis_laporan');
            $table->enum('status', ['Belum Terverifikasi', 'Sudah Terverifikasi']);
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifikasilaporans');
    }
};
