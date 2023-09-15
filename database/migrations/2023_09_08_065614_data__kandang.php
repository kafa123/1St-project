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
        Schema::create('data_kandangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kandang');
            $table->unsignedBigInteger('id_user');
            $table->integer('hari_ke')->nullable(false);
            $table->integer('pakan')->nullable(false);
            $table->integer('minum')->nullable(false);
            $table->integer('bobot')->nullable(false);

            $table->timestamps();
            $table->date('date');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_kandang')->references('id')->on('kandangs');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kandang');
    }
};
