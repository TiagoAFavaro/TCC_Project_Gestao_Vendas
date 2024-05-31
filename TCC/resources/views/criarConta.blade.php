<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="{{ asset('/css/style-login.css') }}">
</head>
<body>

    <div class="login-container">
        <img src=" {{ asset('img/logo_img_corte-removebg-preview.png') }}" alt="logotipo" class="logo">
        <h2>Crie uma Conta Agora, é Grátis!</h2>
        <form>
            <input type="text" placeholder="Nome completo" required>
            <input type="text" placeholder="Email válido" required>
            <input type="password" placeholder="Senha" required>
            <input type="password" placeholder="Confirmar senha" required>
            <button>
                <a type="input" href="" style="color: white" >CADASTRAR</a>
            </button>
        </form>
    </div>

</body>
</html>
