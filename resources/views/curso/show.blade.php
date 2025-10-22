@extends('layouts.app')
@section('title', 'Dados do Curso')
@section('content')

    <h1 class="m-1">DADOS DO CURSO</h1>

    <br>
    
    <div class="d-flex">
        <div class="text-monospace">
            <p>Nome: {{ $curso->nome }}</p>
        </div>
    </div>


@endsection    

