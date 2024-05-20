<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('/css/style-login.css') }}">
</head>
<body>

    <div class="login-container">
        <img src="{{ asset('/img/logo_img_corte-removebg-preview.png') }}" alt="logotipo" style="width=50%; margin-bottom: 10px">
        <form>
            <input type="text" placeholder="Usuário" required>
            <input type="password" placeholder="Senha" required>
            <button>
                <a type="input" href="/home">ENTRAR</a>
            </button>
            <button>
                <a href="/cadastrarusuario" target="_blank">CRIE SUA CONTA EM MENOS DE 1 MINUTO ! <br> É GRÁTIS!</a>
            </button>
            <a href="/recuperarsenha" style="font-size: 15px;" target="_blank">Esqueceu sua senha ?</a>
        </form>
    </div>

</body>
</html>
