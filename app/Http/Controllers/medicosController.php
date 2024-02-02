<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class medicosController extends Controller
{
    
    public function index(){
        $dadosMedicos = Medico::all();
        return view('medicos/index', ['medico'=>$dadosMedicos]);
    }

    public function create(){
        return view('medicos/create');
    }


}
