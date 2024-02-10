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
                            <img src="{{ asset('assets/selecione-um-ativo.png') }}" id="img_logo_acao" width="65px"
                                height="65px" alt="Logo da ação selecionada">
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
                            <input type="number" class="form-control" name="quantidade_acao" id="quantidade_acao"
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
                            <input type="number" class="form-control" name="quantidade_fii" id="quantidade_fii"
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

<!-- Modal = editarMeta -->
<div class="modal fade" id="editarMeta" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-secondary">
                <h5 class="modal-title">Edite as informações da meta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="form-update-meta" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 my-2">
                            <label class="form-label" for="nome_meta">Nome:</label>
                            <input class="form-control" type="text" name="nome_meta" id="nome_meta_update" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label class="form-label" for="descricao_meta">Descição:</label>
                            <textarea class="form-control" name="descricao_meta" id="descricao_meta_update" rows="5"></textarea>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="valor_meta">Valor:</label>
                            <input class="form-control valor_unitario" type="text" name="valor_meta" id="valor_meta_update" required>
                        </div>
                        <div class="col-md-6 mb-2" id="data_personalizada">
                            <label class="form-label" for="data_fim_meta">Data fim:</label>
                            <input class="form-control" type="date" name="data_fim_meta" id="data_fim_meta_update" required>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label class="form-label" for="tipo_meta">Ativos de referência:</label>
                            <select class="form-control select-multiple" name="tipo_meta[]" id="tipo_meta_update" multiple="multiple" required>
                                @foreach ($tipo_metas as $tm)
                                    <option value="{{ $tm->id }}">{{ $tm->nome }}</option>
                                @endforeach
                            </select>
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

<!-- Modal = removerMeta -->
<div class="modal fade" id="removerMeta" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-danger">
                <h5 class="modal-title">Deseja excluir esta meta?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="form-destroy-meta" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center mb-2" style="font-size: 20px"><strong id="nome_meta_destroy"></strong></p>
                            <p class="mt-0 mb-2" id="valor_meta_destroy"></p>
                            <p class="mt-0" id="data_fim_meta_destroy"></p>
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
