<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroProdutos extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'fornecedor',
        'precoCusto',
        'precoVenda'
    ];

    public function vendas()
    {
        return $this->belongsToMany(CadastroVendas::class, 'venda_produto')
            ->withPivot('detalhes', 'quantidade', 'desconto', 'subtotal', 'valor')
            ->withTimestamps();
    }
}
