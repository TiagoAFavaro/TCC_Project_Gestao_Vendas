<?php

namespace App\Http\Controllers;

use App\Models\CadastroProdutos;
use Illuminate\Http\Request;

class CadastroProdutosController extends Controller
{
    public function index()
    {
        $cadastros = CadastroProdutos::all();

        return view('produtos')->with('cadastros', $cadastros);
    }

    public function store(Request $request)
    {
        $cadastro = new CadastroProdutos();
        $cadastro->descricao = $request->input('descricao');
        $cadastro->preco = $request->input('preco');

        $cadastro->save();

        return redirect('/produtos/list');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy($id)
    {
        CadastroProdutos::findOrFail($id)->delete();

        return redirect('/produtos/list')->with('msg', 'Cadastro excluido com sucesso !');
    }
}
