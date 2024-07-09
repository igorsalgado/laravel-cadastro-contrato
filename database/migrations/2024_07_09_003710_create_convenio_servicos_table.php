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
        Schema::create('convenio_servicos', function (Blueprint $table) {
            $table->id('codigo');
            $table->unsignedBigInteger('convenio_codigo');
            $table->string('servico');
            $table->foreign('convenio_codigo')->references('codigo')->on('convenios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convenio_servicos');
    }
};
