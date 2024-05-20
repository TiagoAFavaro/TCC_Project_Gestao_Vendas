<?php

namespace App\Http\Controllers;

use App\Models\CadastroVendas;
use Illuminate\Http\Request;

class CadastroVendasController extends Controller
{
    public function index()
    {
        $cadastros = CadastroVendas::all();

        return view('vendas')->with('cadastros', $cadastros);
    }

    public function store(Request $request)
    {
        $cadastro = new CadastroVendas();
        $cadastro->cliente_id = $request->input('cliente_id');
        $cadastro->produtos_id = $request->input('produtos_id');
        $cadastro->situacao = $request->input('situacao');
        $cadastro->dataEntregaMercadoria = $request->input('dataEntregaMercadoria');
        $cadastro->dataRecebimento = $request->input('dataRecebimento');
        $cadastro->detalhes = $request->input('detalhes');
        $cadastro->quantidade = $request->input('quantidade');
        $cadastro->valor = $request->input('valor');
        $cadastro->desconto = $request->input('desconto');
        $cadastro->subtotal = $request->input('subtotal');
        $cadastro->observacoes = $request->input('observacoes');
        $cadastro->valorTotal = $request->input('valorTotal');

        $cadastro->save();

        return redirect('/vendas/list');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy($id)
    {
        CadastroVendas::findOrFail($id)->delete();

        return redirect('/vendas/list')->with('msg', 'Cadastro excluido com sucesso !');
    }
}
