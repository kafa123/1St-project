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
        Schema::create('total_kematian', function (Blueprint $table) {
            $table->id();
            $table->integer('total_kematian');
            $table->unsignedBigInteger('id_data_kandang');
            $table->timestamps();
            $table->foreign('id_data_kandang')->references('id')->on('data_kandang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('total_kematian');
    }
};
