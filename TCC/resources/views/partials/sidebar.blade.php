<div class="container-fluid">
        <div class="row">
            <nav id="sidebar01" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <img src="{{ asset('img/Seu_Logo.png') }}" class="seu_logo img-fluid mb-3" alt="Imagem do Menu" id="trocarLogo">
                    <hr>
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
                                                <img src="{{ asset('/img/box.png') }}" class="option_icon img-fluid icon-img" alt="Ícone">
                                            </span>
                                            Produtos
                                        </a>
                                    </li>
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
                                    <li>
                                        <a class="dropdown-item" href="/vendas">
                                            <span class="align-middle">
                                                <img src="{{ asset('/img/offer.png') }}" class="option_icon img-fluid icon-img" alt="Ícone">
                                            </span>
                                            Venda de Produtos
                                        </a>
                                    </li>
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
                                    <li>
                                        <a class="dropdown-item" href="/contas_a_pagar/list">
                                            <span class="align-middle">
                                                <img src="{{ asset('/img/wallet.png') }}" class="option_icon img-fluid icon-img" alt="Ícone">
                                            </span>
                                            Contas a Pagar
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/contasreceber/list">
                                            <span class="align-middle">
                                                <img src="{{ asset('/img/money.png') }}" class="option_icon img-fluid icon-img" alt="Ícone">
                                            </span>
                                            Contas a Receber
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                        </li>
                    </ul>
                </div>
            </nav>
