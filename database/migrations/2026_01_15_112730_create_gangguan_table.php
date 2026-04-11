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
        Schema::create('gangguan', function (Blueprint $table) {
    $table->id('id_gangguan');
    $table->string('kd_gangguan')->unique();
    $table->string('nama_gangguan');
    $table->text('mitigasi');
    $table->text('solusi');
    $table->string('np_sasaran');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gangguan');
    }
};
