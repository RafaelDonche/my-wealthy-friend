
<style>

    .modal-header-secondary {
        background-color: rgba(134, 134, 134, 0.425);
    }

    .modal-header-danger {
        background-color: rgba(131, 0, 0, 0.425);
    }
</style>

<!-- Modals = editarAtivo -->
@foreach ($todos as $t)
    <div class="modal fade" id="editarAtivo{{ $t->id }}-{{ $t->ativo_info->id_tipo }}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-secondary">
                    <h5 class="modal-title">Edite as informçações do seu ativo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @if ($t->ativo_info->id_tipo == 1)
                    <form action="{{ route('carteira.acao.update', $t->id) }}" method="post">
                @endif
                @if ($t->ativo_info->id_tipo == 2)
                    <form action="{{ route('carteira.fundo.update', $t->id) }}" method="post">
                @endif
                @if ($t->ativo_info->id_tipo == 3)
                    <form action="{{ route('carteira.cripto.update', $t->id) }}" method="post">
                @endif
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="{{ $t->ativo_info->logo }}" width="65px" height="65px"
                                alt="Logo do ativo para edição">
                        </div>
                        <div class="col-md-9 mb-2">
                            <label class="form-label" for="ativo">Ativo a ser editado:</label>
                            <select class="form-control select2" name="ativo" disabled required>
                                <option value="{{ $t->id_ativo }}" selected>
                                    {{ $t->ativo_info->sigla . ' - ' . $t->ativo_info->nome }}
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="corretora">Corretora</label>
                            <input type="text" class="form-control" name="corretora" id="corretora"
                                value="{{ $t->corretora }}">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="data_compra">Data de compra</label>
                            <input type="date" class="form-control" name="data_compra" id="data_compra"
                                value="{{ $t->data_compra }}" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="valor_unitario">Valor unitário (R$)</label>
                            <input type="text" class="form-control valor_unitario" name="valor_unitario"
                                id="valor_unitario" value="{{ $t->valor_unitario }}" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="quantidade">Quantidade</label>
                            <input type="text" class="form-control" name="quantidade" id="quantidade"
                                placeholder="quantidade até 5 casas decimais"
                                value="{{ $t->ativo_info->id_tipo == 3 ? number_format($t->quantidade, 5, ',', '.') : intval($t->quantidade) }}"
                                required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

<!-- Modal = removerAtivo -->
<div class="modal fade" id="removerAtivo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-danger">
                <h5 class="modal-title">Tem certeza que deseja excluir este ativo?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="form-destroy-ativo" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="" id="img_logo_destroy" width="40px" height="40px" alt="Logo do ativo">
                        </div>
                        <div class="col-md-12 text-center mt-3">
                            <p class="text-center mb-1" id="nome_destroy"></p>
                            <p class="text-center mt-0" id="saldo_destroy"></p>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal = adicionarAcao -->
<div class="modal fade" id="adicionarAcao" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Insira as informações para cadastrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('carteira.acao.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="{{ asset('assets/selecione-um-ativo.png') }}" id="img_logo_acao"
                                width="65px" height="65px" alt="Logo da ação selecionada">
                        </div>
                        <div class="col-md-9 mb-2">
                            <label class="form-label" for="acao">Selecione a ação:</label>
                            <select class="form-control select2" name="acao" id="acao" required>
                                <option></option>
                                @foreach ($ativosAcoes as $aa)
                                    <option value="{{ $aa->id }}" logourl="{{ $aa->logo }}"
                                        valor="{{ number_format($aa->historico[0]->valor_fechamento, 2, ',', '.') }}">
                                        {{ $aa->sigla . ' - ' . $aa->nome }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="corretora_acao">Qual corretora utilizou?</label>
                            <input type="text" class="form-control" name="corretora_acao" id="corretora_acao"
                                placeholder="Rico, Toro, Itaú...">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="data_compra_acao">Quando realizou a compra?</label>
                            <input type="date" class="form-control" name="data_compra_acao" id="data_compra_acao"
                                required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="valor_unitario_acao">Qual foi o valor unitário na compra?
                                (R$)</label>
                            <input type="text" class="form-control valor_unitario" name="valor_unitario_acao"
                                id="valor_unitario_acao" placeholder="valor unítário" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="quantidade_acao">Quantas foram compradas?</label>
                            <input type="text" class="form-control" name="quantidade_acao" id="quantidade_acao"
                                placeholder="quantidade" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal = adicionarFii -->
<div class="modal fade" id="adicionarFii" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Insira as informações para cadastrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('carteira.fundo.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="{{ asset('assets/selecione-um-ativo.png') }}" id="img_logo_fii" width="65px"
                                height="65px" alt="Logo do FII selecionada">
                        </div>
                        <div class="col-md-9 mb-2">
                            <label class="form-label" for="fii">Selecione o FII:</label>
                            <select class="form-control select2" name="fii" id="fii" required>
                                <option></option>
                                @foreach ($ativosFiis as $af)
                                    <option value="{{ $af->id }}" logourl="{{ $af->logo }}"
                                        valor="{{ number_format($af->historico[0]->valor_fechamento, 2, ',', '.') }}">
                                        {{ $af->sigla . ' - ' . $af->nome }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="corretora_fii">Qual corretora utilizou?</label>
                            <input type="text" class="form-control" name="corretora_fii" id="corretora_fii"
                                placeholder="Rico, XP, Mobills...">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="data_compra_fii">Quando realizou a compra?</label>
                            <input type="date" class="form-control" name="data_compra_fii" id="data_compra_fii"
                                required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="valor_unitario_fii">Qual foi o valor unitário na compra?
                                (R$)</label>
                            <input type="text" class="form-control valor_unitario" name="valor_unitario_fii"
                                id="valor_unitario_fii" placeholder="valor unítário" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="quantidade_fii">Quantos foram comprados?</label>
                            <input type="text" class="form-control" name="quantidade_fii" id="quantidade_fii"
                                placeholder="quantidade" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal = adicionarCripto -->
<div class="modal fade" id="adicionarCripto" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Insira as informações para cadastrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('carteira.cripto.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="{{ asset('assets/selecione-um-ativo.png') }}" id="img_logo_cripto"
                                width="65px" height="65px" alt="Logo da cripto selecionada">
                        </div>
                        <div class="col-md-9 mb-2">
                            <label class="form-label" for="cripto">Selecione a criptomoeda:</label>
                            <select class="form-control select2" name="cripto" id="cripto" required>
                                <option></option>
                                @foreach ($ativosCriptos as $ac)
                                    <option value="{{ $ac->id }}" logourl="{{ $ac->logo }}"
                                        valor="{{ number_format($ac->historico[0]->valor_fechamento, 2, ',', '.') }}">
                                        {{ $ac->sigla . ' - ' . $ac->nome }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="corretora_cripto">Qual corretora utilizou?</label>
                            <input type="text" class="form-control" name="corretora_cripto" id="corretora_cripto"
                                placeholder="Binance, Foxbit, BitcoinTrade...">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="data_compra_cripto">Quando realizou a compra?</label>
                            <input type="date" class="form-control" name="data_compra_cripto"
                                id="data_compra_cripto" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="valor_unitario_cripto">Qual era o valor da moeda na compra?
                                (R$)</label>
                            <input type="text" class="form-control valor_unitario" name="valor_unitario_cripto"
                                id="valor_unitario_cripto" placeholder="valor unítário" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="quantidade_cripto">Quantas foram compradas?</label>
                            <input type="text" class="form-control" name="quantidade_cripto"
                                id="quantidade_cripto" placeholder="quantidade até 5 casas decimais" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
