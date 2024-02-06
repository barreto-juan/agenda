<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    // protected $table = 'consultas';
    protected $fillable = [
        'data_consulta',
        'hora_consulta',
        'valor_consulta',
        'observacao_consulta',
        'id_paciente',
        'id_medico',
        'id_especialidade_medico',
    ];

    public function paciente(){
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }

    public function medico(){
        return $this->belongsTo(Medico::class, 'id_medico');
    }

    public function especialidade(){
        return $this->belongsTo(Especialidade::class, 'id_especialidade_medico');
    }
}
