@extends('layouts.app')

@section('title', 'Sales Swift')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-home.css') }}">
@endpush

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="container01">
        <div class="receber-dashboard">
            <h3>A receber hoje:</h3>
            <h1>
                <br />
                R$ 0,00
            </h1>
            <button>Ir para contas a receber -></button>
        </div>

        <div class="pagar-dashboard">
            <h3>A pagar hoje:</h3>
            <h1>
                <br />
                R$ 0,00
            </h1>
            <button>Ir para contas a pagar -></button>
        </div>

        <div class="dashboardMensal">
            <h3>
                <br />
                Recebimentos do mês: Pagamentos do mês:
            </h3>
            <p>Realizado: R$ 0,00 Falta: R$ 0,00 Previsto: R$ 0,00</p>
            <button>Ir para o fluxo de caixa -></button>
        </div>
    </div>
    <div class="grafico-container">
        <div class="col-md-6 col-sm-12 grafico ">
            <canvas id="grafico1"></canvas>
        </div>
        <script>
            const ctx1 = document.getElementById('grafico1');
            let meses1 = ["Janeiro", "Fevereiro", "Março", "Abril"];
            let valores1 = [100, 200, 300, 400];
            new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: meses1,
                    datasets: [{
                        label: 'Vendas',
                        data: valores1,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
         <div class="col-md-6 col-sm-12 grafico">
            <canvas id="grafico2"></canvas>
        </div>
        <script>
            const ctx2 = document.getElementById('grafico2');
            let meses2 = ["Janeiro", "Fevereiro", "Março", "Abril"];
            let valores2 = [100, 200, 300, 400];
            new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: meses2,
                    datasets: [{
                        label: 'Fornecedores a pagar',
                        data: valores2,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>
</main>
@endsection
