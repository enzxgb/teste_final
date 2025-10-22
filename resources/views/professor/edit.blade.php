@extends('layouts.app')
@section('title', 'Formulário de Professores')
@section('content')

    <h1>EDITAR CADASTRO PROFESSOR</h1>
    <form action="{{ route("professor.update", $professor->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <div class="row">
                <div class="col">
                    <label for="">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ $professor->nome }}">
                </div>
                <div class="col">
                    <label for="">Disciplina</label>
                    <input type="text" name="disciplina" class="form-control" placeholder="Disciplina" value="{{ $professor->disciplina }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for=""> Foto: </label>
                    <input class="form-control" type="file" name="foto" id="foto">
                    <img src="{{ asset($professor->foto) }}" style="max-width: 400px" alt="">
                </div>
                <div class="col-md-6">
                    <label for=""> Telefone: </label>
                    <input class="form-control" type="number" name="telefone" id="telefone" placeholder="Telefone" value="{{ $professor->contatoProfessor?->telefone }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for=""> Email: </label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ $professor->contatoProfessor?->email }}">
                </div>
            </div>
            <br>
        <button class="btn btn-primary" type="submit">Alterar</button>
    </form>
    <br>
@endsection