@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO LIVRO</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoLivro')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Titulo:</label>
                <input type="text" class="form-control" name="titulo" 
                       placeholder="Informe o título do livro">
            </div>
            <hr>
            <div class="form-group">
                <label for="ano">Ano Publicação:</label>
                <input type="text" class="form-control" name="ano" 
                       placeholder="Informe o ano de publicação">
            </div>
            <hr>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection