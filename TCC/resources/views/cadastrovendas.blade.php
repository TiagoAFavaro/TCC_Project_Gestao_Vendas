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
            <a href="vendas">Vendas</a>
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
        <!-- Começo da tag form!! Vê se consegue usar uma só pra pág toda Tiagão!!! -->
        <form>
            <div class="forms">
                <div class="table_form">
                    <label class="obg" for="cliente_nome">Cliente</label>
                    <input type="text" id="cliente_nome" name="cliente_nome" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="endereco_rua">Rua</label>
                    <input type="text" id="endereco_rua" name="endereco_rua" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="endereco_numero">Número</label>
                    <input type="text" id="endereco_numero" name="endereco_numero" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="endereco_bairro">Bairro</label>
                    <input type="text" id="endereco_bairro" name="endereco_bairro" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="endereco_cidade">Cidade</label>
                    <input type="text" id="endereco_cidade" name="endereco_cidade" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="endereco_estado">Estado</label>
                    <select id="endereco_estado" name="endereco_estado" required>
                        <option value="" disabled selected>Selecione o estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
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
                            <th>Valor<span style="color: red;"> *</span></th>
                            <th>Subtotal</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" id="produto" name="produto" required>
                            </td>
                            <td>
                                <textarea id="detalhes" name="detalhes" required></textarea>
                            </td>
                            <td>
                                <input type="number" id="quantidade" name="quantidade" required>
                            </td>
                            <td>
                                <input type="number" id="valor" name="valor" step="0.01" required>
                            </td>
                            <td>
                                <input type="number" id="subtotal" name="subtotal" step="0.01" required>
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
                            <th>Produtos<span style="color: red;"> *</span></th>
                            <th>Serviços<span style="color: red;"> *</span></th>
                            <th>Descontos<span style="color: red;"> *</span></th>
                            <th>Valor Total<span style="color: red;"> *</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="number" id="produtos" name="produtos" required>
                            </td>
                            <td>
                                <input type="number" id="servicos" name="servicos" required>
                            </td>
                            <td>
                                <input type="number" id="descontos" name="descontos" step="0.01" required>
                            </td>
                            <td>
                                <input type="number" id="valorTotal" name="valorTotal" step="0.01" required>
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
        </form> 
        <!-- Fim da tag form!! Vê se consegue usar uma só pra pág toda Tiagão!!! -->
    </div>
    <div>
        <a>
            <button class="botao_endpage" style="background-color: green; color: white; margin-left: 20px;">CADASTRAR</button>
        </a>
        <a>
            <button class="botao_endpage" style="background-color: red; color: white;">CANCELAR</button>
        </a>
    </div>
    
    <script>
        document.getElementById('addRowButton').addEventListener('click', function() {
            var table = document.querySelector('table tbody');
            var newRow = table.insertRow();

            var cells = ['produto', 'detalhes', 'quantidade', 'valor', 'subtotal'];
            cells.forEach(function(cell) {
                var newCell = newRow.insertCell();
                var input;
                if (cell === 'detalhes') {
                    input = document.createElement('textarea');
                    input.id = cell;
                    input.name = cell;
                    input.required = true;
                } else {
                    input = document.createElement('input');
                    input.type = cell === 'quantidade' || cell === 'valor' || cell === 'subtotal' ? 'number' : 'text';
                    input.id = cell;
                    input.name = cell;
                    input.required = true;
                    if (cell === 'valor' || cell === 'subtotal') {
                        input.step = '0.01';
                    }
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
