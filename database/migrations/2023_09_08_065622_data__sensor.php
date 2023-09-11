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
        Schema::create('data_sensor', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedBigInteger('id_kandang');
            $table->integer('suhu')->nullable(false);
            $table->integer('kelembaban')->nullable(false);
            $table->integer('amoniak')->nullable(false);
            $table->enum('classification',['normal','abnormal'])->default('normal');
            $table->timestamp('date')->nullable(false);
            $table->foreign('id_kandang')->references('id')->on('kandang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_sensor');
    }
};
