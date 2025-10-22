@extends('layouts.app')
@section('title', 'Formulário de Cadastro')
@section('content')

    <h1 class="m-1">FORMULÁRIO DE CADASTRO TURMA</h1>
    <form action="{{ route("turma.store") }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col">
                <label for="">Descrição: </label>
                <input type="text" name="descricao" class="form-control" placeholder="Descrição">
            </div>
            <div class="col">
                <label for="">Curso: </label>
                <select class="form-control" name="curso_id" id="">
                <option value="">SELECIONE</option>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}"> {{ $curso->nome }} </option>
                @endforeach

                </select>
            </div>
        </div>

        <br>

        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
 <br>
@endsection