<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Medico;
use App\Models\Especialidade;

class consultasController extends Controller
{
    public function index(){
        $dadosConsultas = Consulta::all();
        return view('consultas/index', ['consultas'=>$dadosConsultas]);
    }

    public function create(){
        $dadosConsulta = Consulta::all();
        return view('consultas/create', ['consulta'=>$dadosConsulta]);
    }

    public function store(Request $request){
        Consulta::create($request->all());
        return redirect()->route('consultas-index');
    }

    public function edit($id){
        $dadosConsulta = Consulta::where('id', $id)->first();
        $dadosPaciente = Paciente::all();
        $dadosMedico = Medico::all();
        $dadosEspecialidade = Especialidade::all();
        return view('consultas/edit', ['consulta'=>$dadosConsulta, 'paciente'=>$dadosPaciente, 'medico'=>$dadosMedico, 'especialidade'=>$dadosEspecialidade]);
    }

    public function update(Request $request, $id){
        $data = [
            'data_consulta'=>$request->data_consulta,
            'hora_consulta'=>$request->hora_consulta,
            'valor_consulta'=>$request->valor_consulta,
            'id_paciente'=>$request->id_paciente,
            'id_medico'=>$request->id_medico,
            'id_especialidade_medico'=>$request->id_especialidade_medico,
        ];
        Medico::where('id', $id)->update();        
        return redirect()->route('consultas-index');
    }

    public function destroy($id){
        $consulta = Consulta::where('id', $id)->delete()->first();
        return redirect()->route('consultas-index');
    }

}
