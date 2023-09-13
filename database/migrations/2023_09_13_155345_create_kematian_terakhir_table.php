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
        Schema::create('kematian_terakhir', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_total_kematian');
            $table->unsignedBigInteger('id_user');

            $table->integer('kematian_terakhir');
            $table->time('jam_kematian');
            $table->timestamps();
            $table->foreign('id_total_kematian')->references('id')->on('total_kematian');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kematian_terakhir');
    }
};
