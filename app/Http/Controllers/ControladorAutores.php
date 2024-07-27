<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use App\Models\LivroAutor;
use Illuminate\Support\Facades\DB;

class ControladorAutores extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Autor::all();
        return view('exibeAutores', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoAutor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Autor();
        $dados->Nome = $request->input('nome');
        $dados->Email = $request->input('email');
        if($dados->save())
            return redirect('/autor')->with('success', 'Autor cadastrado com sucesso!!');
        return redirect('/autor')->with('danger', 'Erro ao cadastrar autor!');
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
        $dados = Autor::find($id);
        if(isset($dados))
            return view('editaAutor', compact('dados'));
        return redirect('/autor')->with('danger', 'Cadastro do autor não localizado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Autor::find($id);
        if(isset($dados)){
            $dados->Nome = $request->input('nome');
            $dados->Email = $request->input('email');
            $dados->save();
            return redirect('/autor')->with('success', 'Cadastro do Autor atualizado com sucesso!!');
        }
        return redirect('/autor')->with('danger', 'Cadastro de autor não localizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Autor::find($id);
        if(isset($dados)){
            $livros = LivroAutor::where('autor_id', '=', $id)->first();
            if(!isset($livros)){
                $dados->delete();
                return redirect('/autor')->with('success', 'Cadastro do Autor deletado com sucesso!!');
            }else{
                return redirect('/autor')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        }else{
            return redirect('/autor')->with('danger', 'Cadastro não localizado!!');
        } 
    }
    public function pesquisaAutor(){
        $dados = array("tabela" => "autor");
        return view('pesquisa', compact('dados'));
    }
    public function procuraAutor(Request $request){
        $nome = $request->input('texto');
        $dados = DB::table('autors')->select('id', 'Nome', 'Email')->where(DB::raw('lower(Nome)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibeAutores', compact('dados'));
    }
}
