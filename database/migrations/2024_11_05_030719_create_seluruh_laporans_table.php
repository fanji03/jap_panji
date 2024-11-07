<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('seluruh_laporans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_laporan');
            $table->string('jenis_laporan');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seluruh_laporans');
    }
};
