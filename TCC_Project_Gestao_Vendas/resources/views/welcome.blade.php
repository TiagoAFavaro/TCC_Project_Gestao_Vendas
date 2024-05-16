<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style-home.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Sales Swift</title>
</head>

<body>
    <nav id="head" class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
        <a class="navbar-brand" href="/home">
            <img class="logo inline align-top" src="{{ asset('/img/logo_img_corte.jpg') }}" alt="Logotipo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-bs-controls="navbarNav" aria-bs-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item">
                        <a href="">
                            <img src="{{ asset('/img/engrenagens.png') }}" class="header_icon" style="margin-top: 10px; width: 30px">
                        </a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle header_font" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-bs-haspopup="true" aria-bs-expanded="false">
                            <img class="header_icon_user inline" src="{{ asset('/img/do-utilizador.png') }}">
                            VITOR NUNES SILVA
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">Configurações</a>
                            <a class="dropdown-item" href="#">Perfil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Sair</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row">
            <!-- Menu Lateral -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <a href="/pagina-de-upload-de-imagem">
                        <!-- Link para trocar o logo da empresa-->
                        <img src="{{ asset('img/Seu_Logo.png') }}" class="seu_logo img-fluid mb-3" alt="Imagem do Menu" id="trocarLogo">
                    </a>

                    <hr>

                    <!-- Opções do Menu -->

                    <!-- <img src="{{ asset('/img/seta.png') }}" alt=""> -->

                    <ul class="nav flex-column custom-dropdown">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#cadastroCollapse" role="button" aria-expanded="false" aria-controls="cadastroCollapse" id="cadastroDropdown">
                                <span class="align-middle">
                                    <img src="{{ asset('/img/cadastro.png') }}" class="menu_icon img-fluid icon-img" alt="Ícone">
                                </span>
                                Cadastro
                                <span class="seta">
                                    <img src="{{ asset('/img/seta.png') }}" class="menu_icon img-fluid icon-img" alt="Seta">
                                </span>
                            </a>
                            <div class="collapse" id="cadastroCollapse">
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="/clientes/list">
                                            <span class="align-middle">
                                                <img src="{{ asset('/img/customer.png') }}" class="option_icon img-fluid icon-img" alt="Ícone">
                                            </span>
                                            Clientes
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/fornecedores/list">
                                            <span class="align-middle">
                                                <img src="{{ asset('/img/delivery-box.png') }}" class="option_icon img-fluid icon-img" alt="Ícone">
                                            </span>
                                            Fornecedores
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/produtos/list">
                                            <span class="align-middle">
                                                <img src="{{ asset('/img/delivery-box.png') }}" class="option_icon img-fluid icon-img" alt="Ícone">
                                            </span>
                                            Produtos
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#produtoCollapse" role="button" aria-expanded="false" aria-controls="produtoCollapse">
                                <span class="align-middle">
                                    <img src="{{ asset('/img/caixa.png') }}" class="menu_icon img-fluid icon-img" alt="Ícone">
                                </span>
                                Produtos
                                <span class="seta">
                                    <img src="{{ asset('/img/seta.png') }}" class="menu_icon img-fluid icon-img" alt="Seta">
                                </span>
                            </a>
                            <div class="collapse" id="produtoCollapse">
                                <ul class="list-unstyled">
                                    <li><a class="dropdown-item" href="#">Subopção 1.1</a></li>
                                    <li><a class="dropdown-item" href="#">Subopção 1.2</a></li>
                                    <li><a class="dropdown-item" href="#">Subopção 1.3</a></li>
                                </ul>
                            </div>
                            <hr>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#vendaCollapse" role="button" aria-expanded="false" aria-controls="vendaCollapse">
                                <span class="align-middle">
                                    <img src="{{ asset('/img/venda.png') }}" class="menu_icon img-fluid icon-img" alt="Ícone">
                                </span>
                                Vendas
                                <span class="seta">
                                    <img src="{{ asset('/img/seta.png') }}" class="menu_icon img-fluid icon-img" alt="Seta">
                                </span>
                            </a>
                            <div class="collapse" id="vendaCollapse">
                                <ul class="list-unstyled">
                                    <li><a class="dropdown-item" href="#">Subopção 1.1</a></li>
                                    <li><a class="dropdown-item" href="#">Subopção 1.2</a></li>
                                    <li><a class="dropdown-item" href="#">Subopção 1.3</a></li>
                                </ul>
                            </div>
                            <hr>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#financeiroCollapse" role="button" aria-expanded="false" aria-controls="financeiroCollapse">
                                <span class="align-middle">
                                    <img src="{{ asset('/img/financeiro.png') }}" class="menu_icon img-fluid icon-img" alt="Ícone">
                                </span>
                                Financeiro
                                <span class="seta">
                                    <img src="{{ asset('/img/seta.png') }}" class="menu_icon img-fluid icon-img" alt="Seta">
                                </span>
                            </a>
                            <div class="collapse" id="financeiroCollapse">
                                <ul class="list-unstyled">
                                    <li><a class="dropdown-item" href="#">Subopção 1.1</a></li>
                                    <li><a class="dropdown-item" href="#">Subopção 1.2</a></li>
                                    <li><a class="dropdown-item" href="#">Subopção 1.3</a></li>
                                </ul>
                            </div>
                            <hr>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#notaCollapse" role="button" aria-expanded="false" aria-controls="notaCollapse">
                                <span class="align-middle">
                                    <img src="{{ asset('/img/nota.png') }}" class="menu_icon img-fluid icon-img" alt="Ícone">
                                </span>
                                Nota Fiscal
                                <span class="seta">
                                    <img src="{{ asset('/img/seta.png') }}" class="menu_icon img-fluid icon-img" alt="Seta">
                                </span>
                            </a>
                            <div class="collapse" id="notaCollapse">
                                <ul class="list-unstyled">
                                    <li><a class="dropdown-item" href="#">Subopção 1.1</a></li>
                                    <li><a class="dropdown-item" href="#">Subopção 1.2</a></li>
                                    <li><a class="dropdown-item" href="#">Subopção 1.3</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- Adicione mais opções conforme necessário -->
                    </ul>
                </div>
            </nav>

            <!-- Conteúdo Principal -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="container1">
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
                <!-- Primeiro gráfico -->
                <div class="col-md-6" style="width: 650px; height: 800px; display: inline-block; margin-left: 100px; margin-top: 100px;">
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

                <!-- Segundo gráfico -->
                <div class="col-md-6" style="width: 650px; height: 800px; display: inline-block; margin-left: 50px; margin-top: 100px;">
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
            </main>
            <!---->

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            <script src="{{ asset('/js/index.js') }}"></script>
</body>

</html>