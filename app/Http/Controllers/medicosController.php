<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\Especialidade;
use Illuminate\Http\Request;

class medicosController extends Controller
{
    
    public function index(){
        $dadosMedicos = Medico::all();
        return view('medicos/index', ['medico'=>$dadosMedicos]);
    }

    public function create(){
        $dadosEspecialidades = Especialidade::all();
        return view('medicos/create', ['especialidade'=>$dadosEspecialidades]);
    }

    public function store(Request $request){
        Medico::create($request->all());
        return redirect()->route('medicos-index');
    }

    public function edit($id){
        $medico = Medico::where('id', $id)->first();
        $dadosEspecialidades = Especialidade::all();
        if (!empty($medico)) {
            return view('medicos/edit', ['medico'=>$medico, 'especialidade'=>$dadosEspecialidades]);
        } else {
            return redirect()->route('medicos-index');
        }
    }
    
    public function update(Request $request, $id){
        $data = [
            'nome_medico'->$request->nome_medico,
            'crm_medico'->$request->crm_medico,
            'data_nasc_medico'->$request->data_nasc_medico,
            'id_especialidade'->$request->id_especialidade,
        ];
        Medico::where('id', $id)->update();
        return redirect()->route('medicos-index');
    }

    public function destroy($id){
        $medico = Medico::where('id', $id)->delete()->first();
        return redirect()->route('medicos-index');
    }

}
