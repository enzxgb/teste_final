@extends('layouts.app')
@section('title', 'Listagem de Cursos')
@section('content')

    <h1 class="m-1">LISTA DE CURSOS </h1>
    <br>
    <h3>Cursos, fora Informática</h3>
    @foreach ($curso_dif_informatica as $curso)
        <li>{{ $curso->nome }} </li>
    @endforeach
    <br>
    <h3>Cursos com nome igual a "Administração" e "Gestão"</h3>
    @foreach ($cursos_adm_gestao as $curso)
        <li>{{ $curso->nome }} </li>
    @endforeach
    
    <table class="table table-sm table-bordered table-hover table-striped">
        <thead class="thead-light">
        <th>Nome</th>
        <th>Opções</th>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->nome}}</td>
                    <td>
                        <div class="d-flex">
                            <div class="m-1">
                                <a class="btn btn-outline-success" href="{{ route('curso.edit', $curso->id) }}">Editar</a>
                            </div>
                            <div class="m-1">
                                <a class="btn btn-outline-info" href="{{ route('curso.show', $curso->id) }}">Ver</a>
                            </div>
                            <div class="m-1">
                                <form action="{{ route('curso.destroy', $curso->id) }}" method="post">
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