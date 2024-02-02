@extends('layout/layout')

@section('title', 'Index Medicos')

@section('content')

    <h1>Listagem de Médicos</h1>

    @foreach ($medico as $dados)
        <h1>ID do medico : {{ $dados->id_medico }}</h1>
        <h1>Nome do medico : {{ $dados->nome_medico }}</h1>
        <h1>Especialidade do medico : {{ $dados->especialidade->descricao_especialidade }}</h1>
        <hr>
    @endforeach
    
@endsection