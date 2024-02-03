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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id()->unique();
            $table->date('data_consulta');
            $table->time('hora_consulta');
            $table->decimal('valor_consulta', 5,2);
            $table->string('observacao_consulta');
            $table->unsignedBigInteger('id_paciente')->index();
            $table->unsignedBigInteger('id_medico')->index();
            $table->unsignedBigInteger('id_especialidade_medico')->index();
            $table->timestamps();

            $table->foreign('id_paciente')->references('id')->on('pacientes');
            $table->foreign('id_medico')->references('id')->on('medicos');
            $table->foreign('id_especialidade_medico')->references('id_especialidade')->on('medicos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
