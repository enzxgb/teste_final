@extends('layouts.app')
@section('title', 'Formulário de Cadastro')
@section('content')

    <h1 class="m-1">FORMULÁRIO DE CADASTRO</h1>
    <form action="{{ route("aluno.store") }}" method="post" enctype="multipart/form-data">
        @csrf

        <br>

        <div class="row">
            <div class="col">
                <label for="">Matrícula</label>
                <input type="number" name="matricula" class="form-control" placeholder="Matrícula">
            </div>
            <div class="col">
                <label for="">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome">
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="col">
                <label for="">Data de Nascimento: </label>
                <input type="date" name="data_nascimento" class="form-control" id="">
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-6">
                <label for=""> Foto: </label>
                <input class="form-control" type="file" name="foto" id="foto">
            </div>
            <div class="col-md-3">
                <label for="">Turma: </label>
                <select class="form-control" name="turma_id" id="">
                    <option value="">SELECIONE</option>
                    @foreach ($turmas as $turma)
                        <option value="{{ $turma->id }}"> {{ $turma->descricao }} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-6">
                <label for=""> Telefone: </label>
                <input class="form-control" type="number" name="telefone" id="telefone">
            </div>
        </div>
        

        <br>

        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
 <br>
@endsection