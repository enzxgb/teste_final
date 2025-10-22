@extends('layouts.app')
@section('title', 'Formulário de Cadastro')
@section('content')

    <h1 class="m-1">EDITAR CADASTRO DA TURMA:</h1>
    <form action="{{ route("turma.update", $turma->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="">Descrição: </label>
                <input type="text" name="descricao" class="form-control" placeholder="Nome" value="{{ $turma->descricao }}">
            </div>
            <div class="col">
                <label for="">Curso: </label>
                <select class="form-control" name="curso_id" id="">
                <option value="{{ $turma->curso_id }}" selected>{{ $turma->curso->nome }}</option>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}"> {{ $curso->nome }} </option>
                @endforeach

                </select>
            </div>
        </div>

        <br>
        
        <button class="btn btn-primary" type="submit">Alterar</button>
    </form>
 <br>
@endsection