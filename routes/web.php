<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('inicio');

// Rotas para o ControladorAutores
Route::get('/autor', [App\Http\Controllers\ControladorAutores::class, 'index'])->name('exibeAutores');
Route::get('/autor/novo', [App\Http\Controllers\ControladorAutores::class, 'create'])->name('novoAutor');
Route::post('/autor', [App\Http\Controllers\ControladorAutores::class, 'store'])->name('gravaNovoAutor');
Route::get('/autor/editar/{id}', [App\Http\Controllers\ControladorAutores::class, 'edit'])->name('editarAutor');
Route::post('/autor/{id}', [App\Http\Controllers\ControladorAutores::class, 'update'])->name('atualizaAutor');
Route::get('/autor/apagar/{id}', [App\Http\Controllers\ControladorAutores::class, 'destroy'])->name('deletaAutor');
Route::get('/pesquisaAutor', [App\Http\Controllers\ControladorAutores::class, 'pesquisaAutor'])->name('pesquisaAutor');
Route::get('/procuraAutor', [App\Http\Controllers\ControladorAutores::class, 'procuraAutor'])->name('procuraAutor');

// Rotas para o ControladorLivros
Route::get('/livro', [App\Http\Controllers\ControladorLivros::class, 'index'])->name('exibeLivros');
Route::get('/livro/novo', [App\Http\Controllers\ControladorLivros::class, 'create'])->name('novoLivro');
Route::post('/livro', [App\Http\Controllers\ControladorLivros::class, 'store'])->name('gravaNovoLivro');
Route::get('/livro/editar/{id}', [App\Http\Controllers\ControladorLivros::class, 'edit'])->name('editarLivro');
Route::post('/livro/{id}', [App\Http\Controllers\ControladorLivros::class, 'update'])->name('atualizaLivro');
Route::get('/livro/apagar/{id}', [App\Http\Controllers\ControladorLivros::class, 'destroy'])->name('deletaLivro');
Route::get('/pesquisaLivro', [App\Http\Controllers\ControladorLivros::class, 'pesquisaLivro'])->name('pesquisaLivro');
Route::get('/procuraLivro', [App\Http\Controllers\ControladorLivros::class, 'procuraLivro'])->name('procuraLivro');
Route::get('/novoAutorLivro/{id}', [App\Http\Controllers\ControladorLivros::class, 'novoAutor'])->name('novoAutorLivro');

// Rotas para o ControladorLivroAutor
Route::get('/livroAutor/detalhes/{id}', [App\Http\Controllers\ControladorLivroAutor::class, 'index'])->name('exibeDetalhesLivro');
Route::post('/livroAutor', [App\Http\Controllers\ControladorLivroAutor::class, 'store'])->name('gravaNovoAutorLivro');
Route::get('/livroAutor/apagar/{id}', [App\Http\Controllers\ControladorLivroAutor::class, 'destroy'])->name('deletaAutorLivro');