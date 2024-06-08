<?php

namespace App\Http\Controllers;

use App\Models\CadastroFornecedores;
use Illuminate\Http\Request;

class CadastroFornecedoresController extends Controller
{
    public function index()
    {
        $cadastros = CadastroFornecedores::all();

        return view('fornecedores')->with('cadastros', $cadastros);
    }

    public function store(Request $request)
    {
        $cadastro = new CadastroFornecedores();
        $cadastro->nome = $request->input('nome');
        $cadastro->contato = $request->input('contato');
        $cadastro->telefone = $request->input('telefone');
        $cadastro->cnpj = $request->input('cnpj');
        $cadastro->email = $request->input('email');
        $cadastro->cep = $request->input('cep');
        $cadastro->endereco = $request->input('endereco');
        $cadastro->numero = $request->input('numero');
        $cadastro->cidade = $request->input('cidade');
        $cadastro->estado = $request->input('estado');

        if (CadastroFornecedores::where('cnpj', $request->cnpj)->exists()) {
            return response()->json(['message', 'CNPJ JA CADASTRADO']);
        }

        if (CadastroFornecedores::where('email', $request->email)->exists()){
            return response()->json('message', 'EMAIL JA CADASTRADO');
        }

        $cadastro->save();

        return redirect('/fornecedores/list');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy($id)
    {
        CadastroFornecedores::findOrFail($id)->delete();

        return redirect('/fornecedores/list')->with('msg', 'Cadastro excluido com sucesso !');
    }
}