<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    // protected $table = 'medicos';

    protected $fillable = [
        'nome_medico',
        'crm_medico',
        'data_nasc_medico',
        'id_especialidade',
    ];

    public function especialidade(){
        return $this->belongsTo(Especialidade::class, 'id_especialidade');
    }
    
}
