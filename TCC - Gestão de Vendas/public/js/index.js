// Seleciona todos os botões de dropdown
var dropdownButtons = document.querySelectorAll('.nav-link[data-bs-toggle="collapse"]');

// Itera sobre cada botão de dropdown
dropdownButtons.forEach(function (button) {
    // Adiciona um evento de clique a cada botão
    button.addEventListener('click', function () {
        // Seleciona a seta dentro do botão clicado
        var seta = this.querySelector('.seta img');

        // Verifica se o dropdown está aberto
        var dropdownAberto = this.getAttribute('aria-expanded') === 'true';

        // Se o dropdown estiver aberto, não rotaciona a seta; caso contrário, rotaciona
        if (!dropdownAberto) {
            seta.classList.remove('rotacionar');
        } else {
            seta.classList.add('rotacionar');
        }
    });
});
// Função para formatar o número de telefone conforme o usuário digita
document.getElementById('cpf').addEventListener('input', function (e) {
    var cpf = e.target.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2'); // Adiciona ponto após os 3 primeiros dígitos
    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2'); // Adiciona ponto após os próximos 3 dígitos
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Adiciona hífen e os últimos 2 dígitos
    e.target.value = cpf;
});
document.getElementById('tel').addEventListener('input', function (e) {
    var tel = e.target.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    tel = tel.replace(/(\d{2})(\d)/, '($1) $2'); // Adiciona parênteses após os 2 primeiros dígitos
    tel = tel.replace(/(\d{5})(\d)/, '$1-$2'); // Adiciona hífen após os próximos 5 dígitos
    e.target.value = tel;
});

// Função para remover formatação antes de enviar para o banco de dados
function enviarParaBancoDeDados() {
    var telefoneSemFormatacao = document.getElementById('tel').value.replace(/\D/g, ''); // Remove caracteres não numéricos
    // Aqui você pode enviar telefoneSemFormatacao para o seu servidor
    console.log("Telefone sem formatação:", telefoneSemFormatacao);
}

document.getElementById('cep').addEventListener('input', function (e) {
    var cep = e.target.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    cep = cep.replace(/^(\d{5})(\d)/, '$1-$2'); // Adiciona hífen após os primeiros 5 dígitos
    e.target.value = cep;
});

// Seleciona o elemento da imagem do logo
var trocarLogo = document.getElementById('trocarLogo');

// Adiciona um evento de clique à imagem do logo
trocarLogo.addEventListener('click', function() {
    // Redireciona o usuário para a página de upload de imagem
    window.location.href = "/pagina-de-upload-de-imagem";
});

