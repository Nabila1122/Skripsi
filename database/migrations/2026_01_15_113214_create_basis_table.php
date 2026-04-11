<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('basis', function (Blueprint $table) {
            $table->id('id_basis');

            $table->string('kd_gangguan', 10);
            $table->string('kd_indikasi', 10);

            $table->float('bobot');

            $table->foreign('kd_gangguan')
                  ->references('kd_gangguan')->on('gangguan')
                  ->onDelete('cascade');

            $table->foreign('kd_indikasi')
                  ->references('kd_indikasi')->on('indikasi')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('basis');
    }
};