<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style-forms.css') }}">
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
                    <li class="nav-item">
                        <a href="">
                            <img src="{{ asset('/img/engrenagens.png') }}" class="header_icon" style="margin-top: 10px; width: 30px">
                        </a>
                    </li>
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

    <div class="sub_header">
        <h4>Adicionar Fornecedores</h4>
        <div class="navegador">
            <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
            <a href="/home">Início</a>
            <span class="separator">&gt;</span>
            <a href="/fornecedores/list">Fornecedores</a>
            <span class="separator">&gt;</span>
            <a href="">Adicionar</a>
        </div>
    </div>
    <br>
    <div class="cadastro">
        <div style="display: flex;">
            <img src="{{ asset('/img/edit.png') }}">
            <h5>Cadastro de Clientes</h5>
        </div>
        <hr>
        <div class="forms">
        <form id="cadastrarFornecedores">
            @csrf
                <div class="table_form">
                    <label class="obg" for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="cnpj">CNPJ</label>
                    <input type="text" id="cnpj" name="cnpj" maxlength="18" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="contato">Contato</label>
                    <input type="text" id="contato" name="contato" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" maxlength="15" required>
                </div>
                <div class="table_form">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" maxlength="9">
                </div>
                <div class="table_form">
                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereco">
                </div>
                <div class="table_form">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" name="numero">
                </div>
                <div class="table_form">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade">
                </div>
                <div class="table_form">
                    <label for="estado">Estado</label>
                    <input type="text" id="estado" name="estado">
                </div>
                <div class="button-container">
                    <button type="submit"> CADASTRAR</button>
                </div>
            </form>
        </div>
    </div>
    <!-- <div class="cadastros">
        <div class="bloco">
            <div style="display: flex;">
                <img src="{{ asset('/img/edit.png') }}">
                <h5>Cadastro de Fornecedores</h5>
            </div>
            <hr>

            <form id="cadastrarFornecedores">
            @csrf
                <div class="table_form">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="table_form">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" id="cnpj" name="cnpj" maxlength="18">
                </div>
                <div class="table_form">
                    <label for="contato">Contato</label>
                    <input type="text" id="contato" name="contato">
                </div>
                <div class="table_form">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" maxlength="15" required>
                </div>
                <div class="table_form">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" maxlength="9">
                </div>
                <div class="table_form">
                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereco">
                </div>
                <div class="table_form">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" name="numero">
                </div>
                <div class="table_form">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade">
                </div>
                <div class="table_form">
                    <label for="estado">Estado</label>
                    <input type="text" id="estado" name="estado">
                </div>
                <div class="button-container">
                    <button type="submit">ENVIAR</button>
                </div>
            </form>
        </div>
    </div> -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/index.js') }}"></script>
</body>

</html>