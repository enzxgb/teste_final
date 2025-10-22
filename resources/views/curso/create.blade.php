@extends('layouts.app')
@section('title', 'Formulário de Cadastro')
@section('content')

    <h1 class="m-1">FORMULÁRIO DE CADASTRO CURSO</h1>
    <form action="{{ route("curso.store") }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col">
                <label for="">Nome: </label>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
        </div>

        <br>

        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
 <br>
@endsection