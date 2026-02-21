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
       Schema::create('basis', function (Blueprint $table) {
    $table->id('id_basis');

    $table->unsignedBigInteger('id_gangguan');
    $table->unsignedBigInteger('id_indikasi');

    $table->float('bobot');

    $table->foreign('id_gangguan')
          ->references('id_gangguan')->on('gangguan')
          ->onDelete('cascade');

    $table->foreign('id_indikasi')
          ->references('id_indikasi')->on('indikasi')
          ->onDelete('cascade');

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basis');
    }
};
