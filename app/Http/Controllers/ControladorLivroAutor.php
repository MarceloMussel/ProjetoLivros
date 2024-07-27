<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use App\Models\Livro;
use App\Models\LivroAutor;
use Illuminate\Support\Facades\DB;

class ControladorLivroAutor extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $AutoresLivro;

    public function __construct(LivroAutor $item){
        $this->AutoresLivro = $item;
    }

    public function index($id)
    {
        $dados = $this->AutoresLivro->where('livro_id', $id)->get();
        $livro = Livro::find($id);
        $dados->Titulo = $livro->Titulo;
        foreach($dados as $item){
            $autor = Autor::find($item->autor_id);
            $item->Nome = $autor->Nome;
        }
        return view('exibeDetalhesLivro', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new LivroAutor();
        $dados->autor_id = $request->input('autor');
        $dados->livro_id = $request->input('livro_id');
        if($dados->save())
            return redirect('/livro')->with('success', 'Autor do livro cadastrado com sucesso!!');
        return redirect('/livro')->with('danger', 'Erro ao cadastrar autor do livro!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = LivroAutor::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/livro')->with('success', 'Autor do livro deletado com sucesso!!');
        }
        return redirect('/livro')->with('danger', 'Erro ao deletar autor do livro!');
    }
}
