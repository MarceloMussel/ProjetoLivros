@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border py-4">
    <div class="card-body">
        <h5 class="card-title" style="text-align: center">Cadastro de Autores do Livro</h5>
        <h6 class="text-center">{{$dados->Titulo}}</h6>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome do Autor</th>
                        <th style="text-align:center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dados as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->Nome }}</td>
                        <td style="text-align:center">
                            <a href="/livroAutor/apagar/{{$item->id}}" class="btn btn-outline-danger" 
                               onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                        </td>
                    </tr>  
                    @empty 
                        <tr>
                            <td style="text-align:center" colspan="4">Não há autores cadastrados para este livro</td>                            
                        </tr>
                    @endforelse
                </tbody>
            </table>
    </div>
</div>
    <div class="card-footer">
        <a href="/livro" class="btn btn-info btn-sm" role="button">Voltar</a>
    </div>
</div>
@endsection