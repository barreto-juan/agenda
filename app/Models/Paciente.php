<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_paciente',
        'cpf_paciente',
        'data_nasc_paciente',
        'telefone_paciente',
        'endereco_paciente',
        'bairro_paciente',
        'cidade_paciente',
        'uf_paciente',
        'peso_paciente',
        'altura_paciente',
        'imc_paciente',
    ];


}
