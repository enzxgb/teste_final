@extends('layouts.app')
@section('title', 'Listagem de Turmas')
@section('content')

    <h1 class="m-1">LISTA DE TURMAS </h1>
    <br>
    <h3>Turmas com ID maior que 10</h3>
    @foreach ($turmas_idmaior_10 as $turma)
        <li> {{ $turma->descricao }} </li>
    @endforeach

    <br>

    <h3>Contagem de Turmas</h3>
        <li> {{ $turma_contagem }} </li>
    
    <br>
    <table class="table table-sm table-bordered table-hover table-striped">
        <thead class="thead-light">
        <th>Descrição</th>
        <th>Curso</th>
        <th>Quantidade de alunos</th>
        <th>Opções</th>
        </thead>
        <tbody>
            @foreach ($turmas as $turma)
                <tr>
                    <td>{{ $turma->descricao}}</td>
                    <td> {{ $turma->curso->nome }} </td>
                    <td> {{ $turma->alunos_count }} </td>
                    <td>
                        <div class="d-flex">
                            <div class="m-1">
                                <a class="btn btn-outline-success" href="{{ route('turma.edit', $turma->id) }}">Editar</a>
                            </div>
                            <div class="m-1">
                                <a class="btn btn-outline-info" href="{{ route('turma.show', $turma->id) }}">Ver</a>
                            </div>
                            <div class="m-1">
                                <form action="{{ route('turma.destroy', $turma->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Excluir</button>
                                </form>  
                            </div>
                        </div>
                    </td> 
                                             
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection