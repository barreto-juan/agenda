@extends('layout/layout')

@section('title', 'Atualizar Consulta')
@section('content')
@section('item', 'Atualizar Consulta')
    
    <hr>
    <form action=" {{ route('consultas-edit', ['id'=>$consulta->id]) }} " method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputData">Data</label>
                <input type="date" name="data_consulta" class="form-control" id="inputData" value="{{ $consulta->data_consulta }}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputHora">Hora</label>
                <input type="time" name="hora_consulta" class="form-control" id="inputHora" value="{{ $consulta->hora_consulta }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputValor">Valor</label>
                <input type="number" name="valor_consulta" min="0.00" step="1.00" class="form-control" id="inputValor" value="{{ $consulta->valor_consulta }}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputIdPaciente">Paciente</label>
                <input type="text" name="id_paciente" class="form-control" id="inputIdPaciente" value="{{ $consulta->paciente->nome_paciente }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputIdMedico">Médico</label>
                <input type="text" name="id_medico" class="form-control" id="inputIdMedico" value="{{ $consulta->medico->nome_medico }}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputIdEspecialidade">Especialidade</label>
                <input type="text" name="id_especialidade_medico" class="form-control" id="inputIdEspecialidade" value="{{ $consulta->especialidade->descricao_especialidade }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputObservacao">Observação</label>
                <textarea name="observacao_consulta" class="form-control" id="inputObservacao" cols="30" rows="10">{{ $consulta->observacao_consulta }}</textarea>
            </div>
        </div>

        <button type="submit" name="enviar" value="Enviar" class="btn btn-primary">Enviar</button>
    </form>

@endsection