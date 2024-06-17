<?php

namespace App\Http\Controllers;

use App\Models\CadastroCliente;
use App\Models\CadastroProdutos;
use App\Models\CadastroVendas;
use Illuminate\Http\Request;

class CadastroVendasController extends Controller
{
    public function index()
    {
        $cadastros = CadastroVendas::all();

        return view('vendas')->with('cadastros', $cadastros);
    }

    public function paginaCadastro()
    {
        $cadastrosClientes = CadastroCliente::all();
        $cadastrosProdutos = CadastroProdutos::all();

        return view('cadastrovendas', compact('cadastrosClientes', 'cadastrosProdutos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:cadastro_clientes,id',
            'produto_id' => 'required|exists:cadastro_produtos,id',
            'situacao' => 'required|string|max:255',
            'dataEntregaMercadoria' => 'required|date',
            'dataRecebimento' => 'required|date',
            'detalhes' => 'required|string|max:255',
            'quantidade' => 'required|integer|min:1',
            'valor' => 'required|numeric|min:0',
            'desconto' => 'nullable|numeric|min:0',
            'subtotal' => 'required|numeric|min:0',
            'observacoes' => 'nullable|string',
            'valorTotal' => 'required|numeric|min:0',
        ]);

        $venda = CadastroVendas::create([
            'cliente_id' => $request->input('cliente_id'),
            'situacao' => $request->input('situacao'),
            'dataEntregaMercadoria' => $request->input('dataEntregaMercadoria'),
            'dataRecebimento' => $request->input('dataRecebimento'),
            'observacoes' => $request->input('observacoes'),
            'valorTotal' => $request->input('valorTotal'),
        ]);

        $venda->produtos()->attach($request->input('produto_id'), [
            'detalhes' => $request->input('detalhes'),
            'quantidade' => $request->input('quantidade'),
            'desconto' => $request->input('desconto') ?? 0,
            'subtotal' => $request->input('subtotal'),
            'valor' => $request->input('valor'),
        ]);

        return redirect('/vendas/list');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy($id)
    {
        $venda = CadastroVendas::findOrFail($id);
        $venda->delete();

        return redirect()->route('vendas.index')->with('success', 'Venda excluída com sucesso!');
    }
}
