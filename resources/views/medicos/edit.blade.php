@extends('layout/layout')

@section('title', 'Atualizar Dados de Médicos')
@section('content')
@section('item', 'Atualizar Dados de Médicos')
        <hr>
        <form action=" {{ route('medicos-store') }} " method="POST">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" name="nome_medico" class="form-control" id="inputNome" value="{{$medico->nome_medico}}">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCRM">CRM</label>
                <input type="text" name="crm_medico" class="form-control" id="inputCRM" value="{{$medico->crm_medico}}">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputDataNasc">Data de Nascimento</label>
                <input type="date" name="data_nasc_medico" class="form-control" id="inputDataNasc" value="{{$medico->data_nasc_medico}}">
              </div>
              <div class="form-group col-md-4">
                <label for="inputEspecialidade">Especialidade</label>
                <select name="id_especialidade" id="inputEspecialidade" class="form-control">
                  <option value="{{$medico->id_especialidade}}">{{$medico->especialidade->descricao_especialidade}}</option>
                  @foreach ($especialidade as $item)
                      <option value="{{$item->id}}">{{$item->descricao_especialidade}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <button type="submit" name="enviar" value="Enviar" class="btn btn-primary">Enviar</button>
          </form>


@endsection