@extends('layout/layout')

@section('title', 'Marcar Consulta')
@section('content')
@section('item', 'Marcar Consulta')
    <hr>
    <form action=" {{ route('consultas-store') }} " method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputData">Data</label>
                <input type="date" name="data_consulta" class="form-control" id="inputData">
            </div>
            <div class="form-group col-md-6">
                <label for="inputHora">Hora</label>
                <input type="time" name="hora_consulta" class="form-control" id="inputHora">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputValor">Valor</label>
                <input type="number" name="valor_consulta" min="0.00" step="1.00" class="form-control" id="inputValor" placeholder="Valor">
            </div>
            <div class="form-group col-md-6">
                <label for="inputIdPaciente">Paciente</label>
                <input type="text" name="id_paciente" class="form-control" id="inputIdPaciente" placeholder="Paciente">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputIdMedico">Médico</label>
                <input type="text" name="id_medico" class="form-control" id="inputIdMedico" placeholder="Médico">
            </div>
            <div class="form-group col-md-6">
                <label for="inputIdEspecialidade">Especialidade</label>
                <input type="text" name="id_especialidade_medico" class="form-control" id="inputIdEspecialidade" placeholder="Especialidade">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputObservacao">Observação</label>
                <textarea name="observacao_consulta" class="form-control" id="inputObservacao" cols="30" rows="10" placeholder="Observação"></textarea>
            </div>
        </div>

        <button type="submit" name="enviar" value="Enviar" class="btn btn-primary">Enviar</button>
    </form>

@endsection