<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastroContasaPagar;
use App\Models\CadastroContasaReceber;

class DashboardController extends Controller
{
    public function index()
    {
        // Calcular o total das contas a pagar
        $totalContasPagar = CadastroContasaPagar::sum('valorBruto');

        // Calcular o total das contas a receber
        $totalContasReceber = CadastroContasaReceber::sum('valorBruto');

        return view('welcome')->with([
            'totalContasPagar' => $totalContasPagar,
            'totalContasReceber' => $totalContasReceber
        ]);
    }
    
}
