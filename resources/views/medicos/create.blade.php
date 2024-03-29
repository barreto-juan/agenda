@extends('layout/layout')

@section('title', 'Cadastro de Médicos')
@section('content')
@section('item', 'Cadastro de Médicos')
        <hr>
        <form action=" {{ route('medicos-store') }} " method="POST">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" name="nome_medico" class="form-control" id="inputNome" placeholder="Nome">
              </div>
              <div class="form-group col-md-6">
                <label for="inputCRM">CRM</label>
                <input type="text" name="crm_medico" class="form-control" id="inputCRM" placeholder="CRM">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputDataNasc">Data de Nascimento</label>
                <input type="date" name="data_nasc_medico" class="form-control" id="inputDataNasc">
              </div>
              <div class="form-group col-md-4">
                <label for="inputEspecialidade">Especialidade</label>
                <select name="id_especialidade" id="inputEspecialidade" class="form-control">
                  <option selected>Escolher...</option>
                  @foreach ($especialidade as $item)
                      <option value=" {{ $item->id }} ">{{ $item->descricao_especialidade }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <button type="submit" name="enviar" value="Enviar" class="btn btn-primary">Enviar</button>
          </form>


@endsection