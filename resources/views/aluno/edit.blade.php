@extends('layouts.app')
@section('title', 'Formulário de Cadastro')
@section('content')

    <h1 class="m-1">EDITAR CADASTRO DO ALUNO: {{ $aluno->nome }}</h1>
    <form action="{{ route("aluno.update", $aluno->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="">Matrícula</label>
                <input type="number" name="matricula" class="form-control" placeholder="Matrícula" value="{{ $aluno->matricula }}">
            </div>
            <div class="col">
                <label for="">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ $aluno->nome }}">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $aluno->email }}">
            </div>
            <div class="col">
                <label for="">Data de Nascimento: </label>
                <input type="date" name="data_nascimento" class="form-control" id="" value="{{ $aluno->data_nascimento }}">
            </div>
        </div>

        <br>

        <div>
            <label for="">Foto</label>
            <input type="file" name="foto" id="foto">
            <img src="{{ asset($aluno->foto) }}" alt="" style="max-width: 400px; margin-left: 50px">
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
        
        <br>

        <div class="row">
            <div class="col-md-6">
                <label for=""> Telefone: </label>
                <input class="form-control" type="number" name="telefone" id="telefone" value="{{ $aluno->contatoAluno->telefone }}">
            </div>
        </div>  

        <br>

        <button class="btn btn-primary" type="submit">Alterar</button>
    </form>
 <br>
@endsection