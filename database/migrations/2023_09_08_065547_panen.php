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
        Schema::create('panen', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedBigInteger('id_kandang');
            $table->timestamp('tanggal_mulai')->nullable(false);
            $table->timestamp('tanggal_selesai')->nullable(false)->default(now());
            $table->integer('jumlah_panen')->nullable(false);
            $table->timestamps();
            $table->foreign('id_kandang')->references('id')->on('kandang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panen');
    }
};
