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
    var cpf = e.target.value.replace(/\D/g, ''); 
    cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2'); 
     cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2'); 
     cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); 
     e.target.value = cpf;
 });

 document.getElementById('telefone').addEventListener('input', function (e) {
     var telefone = e.target.value.replace(/\D/g, ''); 
     telefone = telefone.replace(/(\d{2})(\d)/, '($1) $2'); 
     telefone = telefone.replace(/(\d{5})(\d)/, '$1-$2');
     e.target.value = telefone;
     console.log("Funcionando");
 });

// Função para remover formatação antes de enviar para o banco de dados
function enviarParaBancoDeDados() {
    var telefoneSemFormatacao = document.getElementById('tel').value.replace(/\D/g, ''); // Remove caracteres não numéricos
    // Aqui você pode enviar telefoneSemFormatacao para o seu servidor
    console.log("Telefone sem formatação:", telefoneSemFormatacao);
}

 document.getElementById('cep').addEventListener('input', function (e) {
     var cep = e.target.value.replace(/\D/g, ''); 
     cep = cep.replace(/^(\d{5})(\d)/, '$1-$2'); 
     e.target.value = cep;
 });

// Seleciona o elemento da imagem do logo
var trocarLogo = document.getElementById('trocarLogo');

// Adiciona um evento de clique à imagem do logo
trocarLogo.addEventListener('click', function() {
    // Redireciona o usuário para a página de upload de imagem
    window.location.href = "/pagina-de-upload-de-imagem";
});

// Função para carregar um arquivo HTML e inserir no elemento alvo
function loadComponent(url, elementId) {
    fetch(url)
        .then(response => response.text())
        .then(data => document.getElementById(elementId).innerHTML = data)
        .catch(error => console.error('Erro ao carregar componente:', error));
}

// Carregar os componentes de cabeçalho e barra lateral
function loadHeaderAndSidebar() {
    loadComponent('components.html', 'components');
}

