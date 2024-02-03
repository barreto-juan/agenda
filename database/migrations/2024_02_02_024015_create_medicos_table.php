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
            $table->id()->unique();
            $table->string('nome_medico', 40);
            $table->string('crm_medico', 8);
            $table->date('data_nasc_medico');
            $table->unsignedBigInteger('id_especialidade')->index();
            $table->timestamps();

            $table->foreign('id_especialidade')->references('id')->on('especialidades');
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
