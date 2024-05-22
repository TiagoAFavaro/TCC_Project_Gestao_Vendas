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