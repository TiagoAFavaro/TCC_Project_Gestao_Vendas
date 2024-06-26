<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CadastroContasaPagar;

class CadastroContasaPagarController extends Controller
{
    public function index()
    {
        $cadastros = CadastroContasaPagar::all();

        return view('contasAPagar')->with('cadastros', $cadastros);
    }

    public function store(Request $request)
    {
        $cadastro = new CadastroContasaPagar();
        $cadastro->descricaoPagamento = $request->input('descricaoPagamento');
        $cadastro->formaPagamento = $request->input('formaPagamento');
        $cadastro->pagamentoQuitado = $request->input('pagamentoQuitado');
        $cadastro->vencimento = $request->input('vencimento');
        $cadastro->contaBancaria = $request->input('contaBancaria');
        $cadastro->valorBruto = $request->input('valorBruto');
        $cadastro->juros = $request->input('juros');
        $cadastro->desconto = $request->input('desconto');
        $cadastro->valorTotal = $request->input('valorTotal');

        $cadastro->save();

        return redirect('/contas_a_pagar/list');
    }
}