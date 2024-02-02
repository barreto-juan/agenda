<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $table = 'medicos';

    public function especialidade(){
        return $this->belongsTo(Especialidade::class, 'especialidade_id_especialidade');
    }
}
