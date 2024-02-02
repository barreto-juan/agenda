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
        Schema::create('medicos', function (Blueprint $table) {
            $table->id('id_medico');
            $table->string('nome_medico', 40);
            $table->string('crm_medico', 8);
            $table->date('data_nasc_medico');
            $table->unsignedBigInteger('especialidade_id_especialidade');
            $table->timestamps();

            $table->foreign('especialidade_id_especialidade')->references('id_especialidade')->on('especialidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
