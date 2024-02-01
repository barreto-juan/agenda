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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('id_paciente');
            $table->string('nome_paciente', 40);
            $table->string('cpf_paciente', 14);
            $table->date('data_nasc_paciente');
            $table->string('telefone_paciente', 16);
            $table->string('endereco_paciente', 80);
            $table->string('bairro_paciente', 40);
            $table->string('cidade_paciente', 40);
            $table->string('uf_paciente', 2);
            $table->decimal('peso_paciente', 5,2);
            $table->decimal('altura_paciente', 5,2);
            $table->decimal('imc_paciente', 5,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
