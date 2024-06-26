<?php

namespace App\Http\Controllers;

use App\Models\CadastroFornecedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CadastroFornecedoresController extends Controller
{
    public function index()
    {
        $cadastros = CadastroFornecedores::all();

        return view('fornecedores')->with('cadastros', $cadastros);
    }

    public function paginaCadastro()
    {
        return view('cadastrofornecedores');
    }

    public function store(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|max:255',
            'contato' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'cnpj' => 'required|string|max:18|unique:cadastro_fornecedores',
            'email' => 'required|string|email|max:255|unique:cadastro_fornecedores',
            'cep' => 'nullable|string|max:9',
            'endereco' => 'nullable|string|max:255',
            'numero' => 'nullable|string|max:255',
            'cidade' => 'nullable|string|max:255',
            'estado' => 'nullable|string|max:2',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Create new CadastroFornecedores instance
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

        // Save the record
        $cadastro->save();

        // Return success response
        return response()->json(['success' => true]);
    }

    public function update(Request $request, string $id)
    {
        // Implement update logic if needed
    }

    public function destroy($id)
    {
        CadastroFornecedores::findOrFail($id)->delete();

        return redirect('/fornecedores/list')->with('msg', 'Cadastro excluído com sucesso!');
    }
}
