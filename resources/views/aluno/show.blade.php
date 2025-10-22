@extends('layouts.app')
@section('title', 'Dados do Aluno')
@section('content')

    <h1 class="m-1">DADOS DO ALUNO</h1>

    <br>
    
    <div class="d-flex">
        <div class="text-monospace">
            <p>Matrícula: {{ $aluno->matricula }}</p>
            <p>Nome: {{ $aluno->nome }}</p>
            <p>Email: {{ $aluno->email }}</p>
            <p>Data de Nascimento: {{ $aluno->data_nascimento }}</p>
            <p>Telefone: {{ $aluno->contatoAluno->telefone }} </p>
        </div>
            <img src="{{ asset($aluno->foto) }}" alt="" style="max-width: 400px; margin-left: 60px">
    </div>


@endsection    

