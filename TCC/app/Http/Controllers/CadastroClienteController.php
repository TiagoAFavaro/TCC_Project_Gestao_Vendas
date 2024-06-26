<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CadastroCliente;

class CadastroClienteController extends Controller
{
    public function index()
    {
        $cadastros = CadastroCliente::all();

        return view('clientes')->with('cadastros', $cadastros);
    }

    public function visualizarClienteById($id)
    {
        $cliente = CadastroCliente::findOrFail($id);

        return view('visualizarCliente',  ['cliente' => $cliente]);
    }

    public function paginaCadastro()
    {
        return view('cadastrocliente');
    }

    // public function store(Request $request)
    // {
    //     $cadastro = new CadastroCliente();
    //     $cadastro->nome = $request->input('nome');
    //     $cadastro->telefone = $request->input('telefone');
    //     $cadastro->cpf = $request->input('cpf');
    //     $cadastro->email = $request->input('email');
    //     $cadastro->cep = $request->input('cep');
    //     $cadastro->endereco = $request->input('endereco');
    //     $cadastro->numeroCasa = $request->input('numeroCasa');
    //     $cadastro->cidade = $request->input('cidade');
    //     $cadastro->estado = $request->input('estado');

    //     $cpf = preg_replace('/[^0-9]/', '', $request->input('cpf'));

    //     if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) {
    //         return response()->json(['message', 'CPF Invalido, verifique e tente novamente']);
    //     }

    //     $verificaDig1 = $cpf[9];
    //     $sum = 0;
    //     $number_to_multiplicate = 10;

    //     for ($index = 0; $index < 9; $index++) {
    //         $sum += $cpf[$index] * ($number_to_multiplicate--);
    //     }

    //     $result = (($sum * 10) % 11);

    //     if ($result != $verificaDig1) {
    //         return response()->json(['message', 'CPF NAO E VALIDO']);
    //     }

    //     if (CadastroCliente::where('cpf', $request->cpf)->exists()) {
    //         return response()->json(['message', 'CPF ja cadastro']);
    //     }

    //     if (CadastroCliente::where('email', $request->email)->exists()) {
    //         return response()->json(['message', 'email ja cadastro']);
    //     }


    //     $cadastro->save();

    //     return redirect('/clientes/list');
    // }

    public function store(Request $request)
    {

        $cadastro = new CadastroCliente();
        $cadastro->nome = $request->input('nome');
        $cadastro->telefone = $request->input('telefone');
        $cadastro->cpf = $request->input('cpf');
        $cadastro->email = $request->input('email');
        $cadastro->cep = $request->input('cep');
        $cadastro->endereco = $request->input('endereco');
        $cadastro->numeroCasa = $request->input('numeroCasa');
        $cadastro->cidade = $request->input('cidade');
        $cadastro->estado = $request->input('estado');

        $cpf = preg_replace('/[^0-9]/', '', $request->input('cpf'));

        if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) {
            return response()->json(['message', 'CPF Invalido, verifique e tente novamente']);
        }

        $verificaDig1 = $cpf[9];
        $sum = 0;
        $number_to_multiplicate = 10;

        for ($index = 0; $index < 9; $index++) {
            $sum += $cpf[$index] * ($number_to_multiplicate--);
        }

        $result = (($sum * 10) % 11);

        if ($result != $verificaDig1) {
            return response()->json(['message', 'CPF NAO E VALIDO']);
        }

        if (CadastroCliente::where('cpf', $request->cpf)->exists()) {
            return response()->json(['message', 'CPF ja cadastro']);
        }

        if (CadastroCliente::where('email', $request->email)->exists()) {
            return response()->json(['message', 'email ja cadastro']);
        }


        $cadastro->save();

        return redirect('/clientes/list');
    }

    public function edit($id)
    {
        $cliente = CadastroCliente::findOrFail($id);
        return view('editCliente', ['cliente' => $cliente]);
    }


    public function update(Request $request, $id)
    {
        $cadastro = CadastroCliente::findOrFail($id);
        $cadastro->fill($request->all());

        $cpf = preg_replace('/[^0-9]/', '', $request->input('cpf'));

        if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) {
            return response()->json(['message', 'CPF Invalido, verifique e tente novamente']);
        }

        $verificaDig1 = $cpf[9];
        $sum = 0;
        $number_to_multiplicate = 10;

        for ($index = 0; $index < 9; $index++) {
            $sum += $cpf[$index] * ($number_to_multiplicate--);
        }

        $result = (($sum * 10) % 11);

        if ($result != $verificaDig1) {
            return response()->json(['message', 'CPF NAO E VALIDO']);
        }
        
        if (CadastroCliente::where('cpf', $request->cpf)->where('id', '!=', $id)->exists()) {
            return response()->json(['message' => 'CPF já cadastrado']);
        }

        if (CadastroCliente::where('email', $request->email)->where('id', '!=', $id)->exists()) {
            return response()->json(['message' => 'Email já cadastrado']);
        }

        $cadastro->save();
        return redirect('/clientes/list');
    }


    public function destroy($id)
    {
        CadastroCliente::findOrFail($id)->delete();

        return redirect('/clientes/list')->with('msg', 'Cadastro excluido com sucesso !');
    }
}
