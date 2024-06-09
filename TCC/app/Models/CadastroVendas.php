<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroVendas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'situacao',
        'dataEntregaMercadoria',
        'dataRecebimento',
        'observacoes',
        'valorTotal'
    ];

    public function produtos()
    {
        return $this->belongsToMany(CadastroProdutos::class, 'venda_produto')
            ->withPivot('detalhes', 'quantidade', 'desconto', 'subtotal', 'valor')
            ->withTimestamps();
    }
}
