@extends('layouts.app_sem_sidebar')

@section('title', 'Cadastro de Vendas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-forms.css') }}">
@endpush

@section('content')
<div class="sub_header">
    <h4>Cadastre a sua Venda</h4>
    <div class="navegador">
        <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
        <a href="/home">Início</a>
        <span class="separator">&gt;</span>
        <a href="/vendas">Vendas</a>
        <span class="separator">&gt;</span>
        <a href="/cadastrar-vendas">Cadastro de Vendas</a>
    </div>
</div>
<br>
<div class="cadastro">
    <div style="display: flex;">
        <img src="{{ asset('/img/edit.png') }}">
        <h5>Dados Gerais</h5>
    </div>
    <hr>
    <form method="POST" action="{{ route('vendas.store') }}">
        @csrf
        <div class="forms">
            <div class="table_form">
                <label class="obg" for="cliente_nome">Cliente</label>
                <select id="cliente_nome" name="cliente_nome" onchange="populateClienteData(this.value)" required>
                    <option value="" disabled selected>Selecione o cliente</option>
                    @foreach($cadastrosClientes as $cadastro)
                    <option value="{{ $cadastro->id }}" data-cadastro="{{ json_encode($cadastro) }}">{{ $cadastro->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="table_form">
                <label for="endereco_rua">Rua</label>
                <input type="text" id="endereco_rua" name="endereco_rua" disabled>
            </div>
            <div class="table_form">
                <label for="endereco_numero">Número</label>
                <input type="text" id="endereco_numero" name="endereco_numero" disabled>
            </div>
            <div class="table_form">
                <label for="endereco_cidade">Cidade</label>
                <input type="text" id="endereco_cidade" name="endereco_cidade" disabled>
            </div>
            <div class="table_form">
                <label for="endereco_estado">Estado</label>
                <input type="text" id="endereco_estado" name="endereco_estado" disabled>
            </div>
            <div class="table_form">
                <label class="obg" for="data_entrega">Data de Entrega</label>
                <input type="date" id="data_entrega" name="data_entrega" required>
            </div>
            <div class="table_form">
                <label class="obg" for="data_retorno">Data de Retorno</label>
                <input type="date" id="data_recebimento" name="data_recebimento" required>
            </div>
            <div class="table_form">
                <label class="obg" for="situacao">Situação</label>
                <select id="situacao" name="situacao" required>
                    <option value="paga">Paga</option>
                    <option value="em_aberto">Em Aberto</option>
                    <option value="a_pagar">A Pagar</option>
                </select>
            </div>
        </div>
</div>

<div class="cadastro">
    <div style="display: flex;">
        <img src="{{ asset('/img/box.png') }}">
        <h5>Produtos</h5>
    </div>
    <hr>
    <div class="forms">
        <table>
            <thead>
                <tr>
                    <th>Produto<span style="color: red;"> *</span></th>
                    <th>Detalhes</th>
                    <th>Quantidade<span style="color: red;"> *</span></th>
                    <th>Valor</th>
                    <th>Subtotal</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select id="produto_descricao" name="produto_descricao" onchange="populateProductData(this.value)" required>
                            <option value="" disabled selected>Selecione o produto</option>
                            @foreach($cadastrosProdutos as $produto)
                            <option value="{{ $produto->id }}" data-produto="{{ json_encode($produto) }}">{{ $produto->descricao }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="text" id="detalhes" name="detalhes">
                    </td>
                    <td>
                        <input type="number" id="quantidade" name="quantidade" required>
                    </td>
                    <td>
                        <input type="text" id="precoVenda" name="precoVenda" readonly>
                    </td>
                    <td>
                        <input type="text" id="subtotal" name="subtotal" readonly>
                    </td>
                    <td>
                        <a href="">
                            <img src="{{ asset('/img/x.png') }}" style="max-width: 25px;">
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <button id="addRowButton" class="add-row-button">
            <img src="{{ asset('/img/plus.png') }}" alt="Mais">
            Adicionar
        </button>
    </div>
</div>
<div class="cadastro">
    <div style="display: flex;">
        <img src="{{ asset('/img/dindin.png') }}">
        <h5>Total</h5>
    </div>
    <hr>
    <div class="forms">
        <table>
            <thead>
                <tr>
                    <th>Produtos</th>
                    <th>Serviços</th>
                    <th>Descontos</th>
                    <th>Valor Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="number" id="produtos" name="produtos" disabled>
                    </td>
                    <td>
                        <input type="number" id="servicos" name="servicos" disabled>
                    </td>
                    <td>
                        <input type="number" id="descontos" name="descontos" step="0.01" disabled>
                    </td>
                    <td>
                        <input type="number" id="valorTotal" name="valorTotal" step="0.01" disabled>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="cadastro">
    <div style="display: flex;">
        <img src="{{ asset('/img/notes.png') }}">
        <h5>Observações</h5>
    </div>
    <hr>
    <p><i>Essa observação será impressa no recibo.</i></p>
    <textarea id="observacoes" style="width: 50%;" name="observacoes" rows="4" cols="50" required></textarea>
</div>
<div>
    <a>
        <button class="botao_endpage" style="background-color: green; color: white; margin-left: 20px;">CADASTRAR</button>
    </a>
    <a>
        <button class="botao_endpage" style="background-color: red; color: white;">CANCELAR</button>
    </a>
</div>
</form>
<script>
    function tornarFloat(valorString) {
        const valorFloat01 = valorString.replace('R$', '');
        const valorFloat02 = valorFloat01.replace(',', '.');
        const valorFloat = parseFloat(valorFloat02);
        return valorFloat;
    }

    function tornarString(valorFloat) {
        const valorString01 = valorFloat.toFixed(2);
        const valorString02 = valorString01.replace('.', ',');
        const valorString = 'R$ ' + valorString02; 
        return valorString;
    }

    function populateClienteData(clienteId) {
        const clienteSelect = document.querySelector(`#cliente_nome option[value="${clienteId}"]`);
        const cadastro = JSON.parse(clienteSelect.getAttribute('data-cadastro'));

        document.getElementById('endereco_rua').value = cadastro.endereco;
        document.getElementById('endereco_numero').value = cadastro.numeroCasa;
        document.getElementById('endereco_cidade').value = cadastro.cidade;
        document.getElementById('endereco_estado').value = cadastro.estado;
    }

    function populateProductData(produtoId) {
        const produtoSelect = document.querySelector(`#produto_descricao option[value="${produtoId}"]`);
        const produto = JSON.parse(produtoSelect.getAttribute('data-produto'));

        const valorFormatado = produto.precoVenda.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
        document.getElementById('precoVenda').value = valorFormatado;
    }

    document.getElementById('quantidade').addEventListener('input', function() {
        const quantidadeInput = document.getElementById('quantidade');
        const precoVendaText = document.getElementById('precoVenda').value;
        
        let quantidade = parseFloat(quantidadeInput.value);
        if (isNaN(quantidade)) {
            quantidade = 0; 
        }

        const precoVenda = tornarFloat(precoVendaText)

        if (!isNaN(quantidade) && !isNaN(precoVenda)) {
            let subtotal = quantidade * precoVenda;

            const subtotalFormatado = tornarString(subtotal);
            document.getElementById('subtotal').value = subtotalFormatado;
        } else {
            document.getElementById('subtotal').value = "0";
        }
    });

    document.getElementById('precoVenda').addEventListener('input', function() {
        const quantidade = document.getElementById('quantidade').value;
        const precoVenda = document.getElementById('precoVenda').value;
        const subtotal = quantidade * precoVenda;
        document.getElementById('subtotal').value = subtotal.toFixed(2); 
    });

    document.getElementById('addRowButton').addEventListener('click', function(event) {
        event.preventDefault();
        var table = document.querySelector('table tbody');
        var newRow = table.insertRow();
        var rowId = table.rows.length; // Número da nova linha

        var cells = ['produto', 'detalhes', 'quantidade', 'precoVenda', 'subtotal'];
        cells.forEach(function(cell, index) {
            var newCell = newRow.insertCell();
            var input;

            if (index === 0) {
                input = document.createElement('select');
                input.id = cell + '_' + rowId;
                input.name = cell + '[]';
                input.required = true;

                var optionDefault = document.createElement('option');
                optionDefault.value = '';
                optionDefault.text = 'Selecione um produto';
                optionDefault.disabled = true;
                optionDefault.selected = true;
                input.appendChild(optionDefault);

                input.addEventListener('change', function(e) {
                    const produtoId = e.target.value;
                    console.log(produtoId, rowId);
                    const produtoSelect = document.querySelector(`#produto_descricao option[value="${produtoId}"]`);
                    const produto = JSON.parse(produtoSelect.getAttribute('data-produto'));

                    const precoString = tornarString(produto.precoVenda);
                    
                    document.getElementById('precoVenda_' + rowId).value = precoString;
                });

                console.log(rowId);

                @foreach($cadastrosProdutos as $produto)
                var option = document.createElement('option');
                option.value = '{{ $produto->id }}';
                option.text = '{{ $produto->descricao }}';
                input.appendChild(option);
                @endforeach

            } else {
                input = document.createElement('input');
                if (cell === 'quantidade') {
                    input.type = 'number';
                    input.step = '1';
                    input.min = '0';
                } else {
                    input.type = 'text';
                    input.readOnly = cell === 'precoVenda' || cell === 'subtotal';
                }
                input.id = cell + '_' + rowId;
                input.name = cell + '[]';
                input.required = true;
            }

            switch (cell) {
                case "quantidade":
                    input.addEventListener('input', function() {
                        const quantidade = document.getElementById('quantidade_' + rowId).value;
                        const precoVenda = tornarFloat(document.getElementById('precoVenda_' + rowId).value);
                        const subtotal = quantidade * precoVenda;
                        document.getElementById('subtotal_' + rowId).value = tornarString(subtotal);
                    });
                    break;

                case "precoVenda":
                    input.addEventListener('input', function() {
                        const quantidade = document.getElementById('quantidade_' + rowId).value;
                        const precoVenda = tornarFloat(document.getElementById('precoVenda_' + rowId).value);
                        const subtotal = quantidade * precoVenda;
                        document.getElementById('subtotal_' + rowId).value = tornarString(subtotal);
                    });
                    break;
            }

            input.style.width = '100%';
            input.style.height = '30px';
            input.style.borderRadius = '5px';
            input.style.border = '1px solid rgb(211, 205, 205)';
            input.style.boxSizing = 'border-box';
            newCell.appendChild(input);
        });

        // Adiciona o botão de remover na nova linha
        var actionCell = newRow.insertCell();
        var removeButton = document.createElement('a');
        var removeImg = document.createElement('img');
        removeImg.src = "{{ asset('/img/x.png') }}";
        removeImg.style.maxWidth = '25px';
        removeButton.appendChild(removeImg);
        removeButton.href = '#';
        removeButton.addEventListener('click', function(event) {
            event.preventDefault();
            table.removeChild(newRow);
        });
        actionCell.appendChild(removeButton);
    });
</script>
@endsection