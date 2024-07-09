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
        Schema::create('contratos', function (Blueprint $table) {
            $table->id('codigo');
            $table->integer('prazo');
            $table->decimal('valor', 15, 2);
            $table->date('data_inclusao');
            $table->unsignedBigInteger('convenio_servico_codigo');
            $table->foreign('convenio_servico_codigo')->references('codigo')->on('convenio_servicos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
