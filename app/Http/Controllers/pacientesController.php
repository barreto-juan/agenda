<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class pacientesController extends Controller
{
    
    public function index(){
        $dadosPaciente = Paciente::all();
        return view('pacientes/index', ['paciente'=>$dadosPaciente]);
    }
    
    public function create(){
        return view('pacientes/create');
    }

    public function store(Request $request){
        Paciente::create($request->all());
        return redirect()->route('pacientes-index');
    }

    public function edit($id){
        $paciente = Paciente::where('id_paciente', $id)->first();
        if (!empty($paciente)){
            return view('pacientes/edit', ['paciente'=>$paciente]);
        }else{
            return redirect()->route('pacientes-index');
        }
    }

    public function update(Request $request, $id){
        $data = [
            'nome_paciente' => $request->nome_paciente,
            'cpf_paciente' => $request->cpf_paciente,
            'data_nasc_paciente' => $request->data_nasc_paciente,
            'telefone_paciente' => $request->telefone_paciente,
            'endereco_paciente' => $request->endereco_paciente,
            'bairro_paciente' => $request->bairro_paciente,
            'cidade_paciente' => $request->cidade_paciente,
            'uf_paciente' => $request->uf_paciente,
            'peso_paciente' => $request->peso_paciente,
            'altura_paciente' => $request->altura_paciente,
            'imc_paciente' => $request->imc_paciente,
        ];

        Paciente::where('id_paciente', $id)->update($data);
        return redirect()->route('pacientes-index');
    }

    public function delete($id){
        $paciente = Paciente::where('id_paciente', $id)->first();
        if (!empty($paciente)){
            return view('pacientes/delete', ['paciente'=>$paciente]);
        }else{
            return redirect()->route('pacientes-index');
        }
    }

    public function destroy($id){
        Paciente::where('id_paciente', $id)->delete();
        return redirect()->route('pacientes-index');
    }
}
