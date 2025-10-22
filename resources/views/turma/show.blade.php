@extends('layouts.app')
@section('title', 'Dados da Turma')
@section('content')

    <h1 class="m-1">DADOS DA TURMA</h1>

    <br>
    
    <div class="d-flex">
        <div class="text-monospace">
            <p>Descrição: {{ $turma->descricao }}</p>
            <p>Curso: {{ $turma->curso->nome }}</p>
        </div>
    </div>


@endsection    

