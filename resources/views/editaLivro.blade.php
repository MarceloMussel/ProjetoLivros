@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO LIVRO</h1>
            </div>
        </div>
        <form action="/livro/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" name="titulo" 
                       value="{{$dados->Titulo}}">
            </div>
            <div class="form-group">
                <label for="ano">Ano de Publicação:</label>
                <input type="text" class="form-control" name="ano" 
                       value="{{$dados->AnoPublicacao}}">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection