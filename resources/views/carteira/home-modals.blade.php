
<style>

    .modal-header-secondary {
        background-color: rgba(134, 134, 134, 0.425);
    }

    .modal-header-danger {
        background-color: rgba(131, 0, 0, 0.425);
    }
</style>

<!-- Modal = editarAtivo -->
<div class="modal fade" id="editarAtivo" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-secondary">
                <h5 class="modal-title">Edite as informçações do seu ativo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="form-update-ativo" method="post">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <img src="" id="img_logo_update" width="65px" height="65px"
                            alt="Logo do ativo para edição">
                    </div>
                    <div class="col-md-9 mb-2">
                        <label class="form-label" for="ativo">Ativo a ser editado:</label>
                        <select class="form-control select2" name="ativo" id="select_update" disabled required></select>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label" for="corretora">Corretora</label>
                        <input type="text" class="form-control" name="corretora" id="corretora_update"
                            value="">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label" for="data_compra">Data de compra</label>
                        <input type="date" class="form-control" name="data_compra" id="data_compra_update"
                            value="" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label" for="valor_unitario">Valor unitário (R$)</label>
                        <input type="text" class="form-control valor_unitario" name="valor_unitario"
                            id="valor_unitario_update" value="" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label" for="quantidade">Quantidade</label>
                        <input class="form-control" name="quantidade" id="quantidade_update"
                            placeholder="quantidade até 5 casas decimais"
                            type=""
                            value=""
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

<!-- Modal = comprarAtivo -->
<div class="modal fade" id="comprarAtivo" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-secondary">
                <h5 class="modal-title">Insira as informações de compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="form-comprar-ativo" method="post">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <img src="" id="img_logo_comprar" width="65px" height="65px"
                            alt="Logo do ativo para edição">
                    </div>
                    <div class="col-md-9 mb-2">
                        <label class="form-label" for="ativo">Ativo a ser comprado:</label>
                        <select class="form-control select2" name="ativo" id="select_comprar" disabled required></select>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="form-label" for="data_compra">Data de compra</label>
                        <input type="date" class="form-control" name="data_compra" id="data_compra_comprar"
                            value="" required>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="form-label" for="valor_unitario">Valor unitário na compra (R$)</label>
                        <input type="text" class="form-control valor_unitario" name="valor_unitario"
                            id="valor_unitario_comprar" value="" required>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="form-label" for="quantidade">Quantidade comprada</label>
                        <input class="form-control" name="quantidade" id="quantidade_comprar"
                            placeholder="quantidade até 5 casas decimais"
                            type=""
                            value=""
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

<!-- Modal = venderAtivo -->
<div class="modal fade" id="venderAtivo" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-secondary">
                <h5 class="modal-title">Edite as informçações do seu ativo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="form-vender-ativo" method="post">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <img src="" id="img_logo_vender" width="65px" height="65px"
                            alt="Logo do ativo para edição">
                    </div>
                    <div class="col-md-9 mb-2">
                        <label class="form-label" for="ativo">Ativo a ser vendido:</label>
                        <select class="form-control select2" name="ativo" id="select_vender" disabled required></select>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="form-label" for="data_venda">Data de venda</label>
                        <input type="date" class="form-control" name="data_venda" id="data_venda_vender"
                            value="" required>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="form-label" for="valor_venda">Valor unitário na venda (R$)</label>
                        <input type="text" class="form-control valor_unitario" name="valor_venda"
                            id="valor_venda" value="" required>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label class="form-label" for="quantidade_venda">Quantidade vendida</label>
                        <input class="form-control" name="quantidade_venda" id="quantidade_vender"
                            placeholder="quantidade até 5 casas decimais"
                            type=""
                            value=""
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

