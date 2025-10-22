@extends('layouts.app')
@section('title', 'Listagem de Professores')
@section('content')

    <h1 class="m-1" >LISTA DE PROFESSORES</h1>
    <br>
    <h3>Professores começado com "João" e terminado em "Silva"</h3>
    @foreach ( $professor_inicio_fim as $professor)
        <li> {{ $professor->nome }} </li>
    @endforeach 
    <br>
    <table class="table table-sm table-bordered table-hover table-striped">
        <thead class="thead-light">
        <th>Nome</th>
        <th>Disciplina</th>
        <th>Opções</th>
        </thead>
        <tbody>
            @foreach ($professores as $professor)
                <tr>
                    <td>{{ $professor->nome}}</td>
                    <td>{{ $professor->disciplina}}</td>
                    <td>
                        <div class="d-flex">
                            <div class="m-1">
                                <a class="btn btn-outline-success" href="{{ route('professor.edit', $professor->id) }}">Editar</a>
                            </div>
                            <div class="m-1">
                                <a class="btn btn-outline-info" href="{{ route('professor.show', $professor->id) }}">Ver</a>
                            </div>
                            <div class="m-1">
                                <form action="{{ route('professor.destroy', $professor->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger" type="submit">Excluir</button>
                                </form>
                            </div>
                            
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection