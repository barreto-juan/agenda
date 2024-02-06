@extends('layout/layout')

@section('title', 'Cadastro de Pacientes')
@section('content')
@section('item', 'Cadastro de Pacientes')
        <hr>
        <form action="{{ route('pacientes-store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="inputNome3" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input name="nome_paciente" type="text" class="form-control" id="inputNome3" placeholder="Nome">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputCPF3" class="col-sm-2 col-form-label">CPF</label>
                <div class="col-sm-10">
                    <input name="cpf_paciente" type="text" class="form-control" id="inputCPF3" placeholder="CPF (111.222.333-44)">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputDataNasc2" class="col-sm-2 col-form-label">Data de Nascimento</label>
                <div class="col-sm-10">
                    <input name="data_nasc_paciente" type="date" class="form-control" id="inputDataNasc2" placeholder="Data de Nascimento">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTelefone" class="col-sm-2 col-form-label">Telefone</label>
                <div class="col-sm-10">
                <input name="telefone_paciente" type="text" class="form-control" id="inputTelefone" placeholder="Telefone (XX) XXXXX-XXXX">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEndereco" class="col-sm-2 col-form-label">Endereço</label>
                <div class="col-sm-10">
                <input name="endereco_paciente" type="text" class="form-control" id="inputEndereco" placeholder="Endereço">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputBairro" class="col-sm-2 col-form-label">Bairro</label>
                <div class="col-sm-10">
                <input name="bairro_paciente" type="text" class="form-control" id="inputBairro" placeholder="Bairro">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputCidade" class="col-sm-2 col-form-label">Cidade</label>
                <div class="col-sm-10">
                <input name="cidade_paciente" type="text" class="form-control" id="inputCidade" placeholder="Cidade">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputUF" class="col-sm-2 col-form-label">UF</label>
                <div class="col-sm-10">
                <input name="uf_paciente" type="text" class="form-control" id="inputUF" placeholder="UF">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPeso" class="col-sm-2 col-form-label">Peso</label>
                <div class="col-sm-10">
                <input name="peso_paciente" type="number" min="0.00" max="1000" step="0.01" class="form-control" id="inputPeso" placeholder="Peso">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAltura" class="col-sm-2 col-form-label">Altura</label>
                <div class="col-sm-10">
                <input name="altura_paciente" type="number" min="0.00" max="3.00" step="0.01" class="form-control" id="inputAltura" placeholder="Altura">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputIMC" class="col-sm-2 col-form-label">IMC</label>
                <div class="col-sm-10">
                <input name="imc_paciente" type="number" min="0.00" max="100.00" step="0.01" class="form-control" id="inputIMC" placeholder="IMC">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="Enviar" value="Enviar" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>



@endsection