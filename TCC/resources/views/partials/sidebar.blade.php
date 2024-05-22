<div class="container-fluid">
        <div class="row">
            <!-- Menu Lateral -->
            <nav id="sidebar01" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
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
                                                <img src="{{ asset('/img/parcel.png') }}" class="option_icon img-fluid icon-img" alt="Ícone">
                                            </span>
                                            Fornecedores
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/produtos/list">
                                            <span class="align-middle">
                                                <img src="{{ asset('/img/des.png') }}" class="option_icon img-fluid icon-img" alt="Ícone">
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