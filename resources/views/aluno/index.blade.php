@extends('layouts.app')
@section('title', 'Listagem de Alunos')
@section('content')

    <h1 class="m-1">LISTA DE ALUNOS </h1>
    
    <br>

    <table class="table table-sm table-bordered table-hover table-striped">
        <thead class="thead-light">
        <th>Matrícula</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Data de Nascimento</th>
        <th>Telefone</th>
        <th>Opções</th>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->matricula}}</td>
                    <td>{{ $aluno->nome}}</td>
                    <td>{{ $aluno->email}}</td>
                    <td>{{ $aluno->data_nascimento}}</td>
                    <td>{{ $aluno->contatoAluno->telefone}}</td>
                    <td>
                        <div class="d-flex">
                            <div class="m-1">
                                <a class="btn btn-outline-success" href="{{ route('aluno.edit', $aluno->id) }}">Editar</a>
                            </div>
                            <div class="m-1">
                                <a class="btn btn-outline-info" href="{{ route('aluno.show', $aluno->id) }}">Ver</a>
                            </div>
                            <div class="m-1">
                                <form action="{{ route('aluno.destroy', $aluno->id) }}" method="post">
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
    <h3>Alunos com data de nascimento no dia 10/05/2005</h3>
    @foreach ($alunos_data_nascimento_1005 as $aluno)
        <li> {{ $aluno->nome }} </li>
    @endforeach

    <br>
    
    <h3>Alunos com data de nascimento inferior a 01/01/2006</h3>
    @foreach ($alunos_data_inferior_010106 as $aluno)
        <li> {{ $aluno->nome}} </li>
    @endforeach

    <br>

    <h3>Alunos com data de nascimento entre 01/01/2004 e 31/12/2006</h3>
    @foreach ($alunos_datas_between as $aluno)
        <li> {{ $aluno->nome}} </li>
    @endforeach

    <br>

    <h3>Alunos que contem "Silva" </h3>
    @foreach ($alunos_silva as $aluno)
        <li> {{ $aluno->nome}} </li>
    @endforeach
    
    <br>

    <h3>Alunos que nasceram depois de 2005 com domínio igual a @gmail </h3>
    @foreach ($alunos_gmail_2005 as $aluno)
        <li> {{ $aluno->nome}} </li>
    @endforeach
    
@endsection