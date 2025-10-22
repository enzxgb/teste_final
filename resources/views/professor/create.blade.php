@extends('layouts.app')
@section('title', 'Formulário de Professores')
@section('content')

    <h1>FORMULÁRIO DE PROFESSORES</h1>
    <form action="{{ route("professor.store") }}" method="post" enctype="multipart/form-data">
        @csrf

            <div class="row">
                <div class="col">
                    <label for="">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Nome">
                </div>
                <div class="col">
                    <label for="">Disciplina</label>
                    <input type="text" name="disciplina" class="form-control" placeholder="Disciplina">
                </div>
            </div>

            <br>
    
            <div class="row">
                <div class="col-md-6">
                    <label for=""> Foto: </label>
                    <input class="form-control" type="file" name="foto" id="foto">
                </div>
                <div class="col-md-6">
                    <label for=""> Telefone: </label>
                    <input class="form-control" type="number" name="telefone" id="telefone">
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-6">
                    <label for=""> Email: </label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>
            </div>
            <br>
        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
    <br>
@endsection