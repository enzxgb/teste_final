@extends('layouts.app')
@section('title', 'Formulário de Cadastro')
@section('content')

    <h1 class="m-1">EDITAR CADASTRO DO CURSO: {{ $curso->nome }}</h1>
    <form action="{{ route("curso.update", $curso->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="">Nome: </label>
                <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ $curso->nome }}">
            </div>

        </div>

        <br>
        
        <button class="btn btn-primary" type="submit">Alterar</button>
    </form>
 <br>
@endsection