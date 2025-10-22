@extends('layouts.app')
@section('title', 'Dados do Professor')
@section('content')

    <h1>DADOS DO PROFESSOR</h1>

    <p>Nome: {{ $professor->nome }}</p>
    <p>Disciplina: {{ $professor->disciplina }}</p>
    <p>Telefone: {{ $professor->contatoProfessor->telefone }}</p>
    <p>Email: {{ $professor->contatoProfessor->email }}</p>
    <p><img src="{{ asset($professor->foto) }}" style="max-width: 400px; border: 1px solid blue; border-radius: 10px;">  </p>

@endsection