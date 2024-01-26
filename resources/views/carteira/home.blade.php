@extends('layout-main')

@section('content')

    <style>

        .float-end {
            float: right;
        }

        .nav-tabs .nav-link {
            color: black;
        }

        .card-tab-panel {
            margin: 1rem;
        }

        .nav-tabs .nav-item {
            font-size: 15px;
        }

        .search-input {
            border-style: solid !important;
            border-color: #ced4da !important;
            border-width: 0px 0px 1px 0px !important;
        }

        a.btn-primary {
            width: 100%;
            text-align: center;
        }

        .cards {
            padding: 1.5rem;
            overflow-y: scroll;
            overflow-x: hidden;
            height: 700px;
        }

        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 10px rgba(0,0,0,0.5);
        }

        .card-ativo {
            width: 100% !important;
            border-radius: 15px;
        }

        .card-ativo:hover {
            transform: scale(1.03);
            box-shadow: 0px 6px 6px 4px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            box-shadow: 0px 10px 10px 4px rgba(0, 0, 0, 0.1);
            width: 6rem !important;
            height: 6rem !important;
        }

        .img-cripto {
            box-shadow: 0px 10px 10px 4px rgba(0, 0, 0, 0.1);
            width: 4rem !important;
            height: 4rem !important;
            border-radius: 50%;
        }


        @media (max-width: 767px) {
            .col-img {
                padding-bottom: 0.5rem;
                margin-bottom: 0.5rem;
            }
        }

        @media (min-width: 1100px) {
            .card-img-top {
                width: 8rem !important;
                height: 8rem !important;
            }
        }

        .inner-body {
            width: 100%;
            height: 100%;
            border-radius: 15px;
            background-color: #ced4da;
            box-shadow: 0px 10px 10px 4px rgba(0, 0, 0, 0.1);
            padding: 0.5rem;
        }

        .text-end {
            text-align: right;
        }

        .dropdown-menu:hover {
            cursor: pointer;
        }
    </style>

    @include('errors.alerts')
    @include('errors.errors')

    <div class="card card-tab-panel">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs pull-right" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="entrada-tab" data-toggle="tab" href="#entrada" role="tab"
                        aria-controls="entrada" aria-selected="true">
                        Entrada
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="acoes-tab" data-toggle="tab" href="#acoes" role="tab" aria-controls="acoes"
                        aria-selected="false">
                        Ações
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fiis-tab" data-toggle="tab" href="#fiis" role="tab" aria-controls="fiis"
                        aria-selected="false">
                        FII's
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="criptos-tab" data-toggle="tab" href="#criptos" role="tab"
                        aria-controls="criptos" aria-selected="false">
                        Criptos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="metas-tab" data-toggle="tab" href="#metas" role="tab" aria-controls="metas"
                        aria-selected="false">
                        Metas
                    </a>
                </li>
            </ul>
        </div>

        <div class="card-body" id="myTabCardBody">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="entrada" role="tabpanel" aria-labelledby="entrada-tab">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="col-md-12">
                                <input type="search" class="form-control text-center search-input" id="search-input-entrada" placeholder="Busque seu ativo...">
                            </div>
                            <div class="col-md-12 cards" id="cards-entrada">
                                @foreach ($todos as $t)
                                    <div class="card card-ativo my-2 px-2">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                @if ($t->ativo_info->id_tipo == 3)
                                                    <img class="img-cripto" src="{{ $t->ativo_info->logo }}" alt="Logo do ativo">
                                                @else
                                                    <img class="card-img-top" src="{{ $t->ativo_info->logo }}" alt="Logo do ativo">
                                                @endif
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <div class="card-actions float-end">
                                                    <div class="dropdown position-relative">
                                                        <a href="#" data-toggle="dropdown">
                                                            <i class="fas fa-bars"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" data-toggle="modal"
                                                                data-target="#editarAtivo{{ $t->id }}-{{ $t->ativo_info->id_tipo }}">Editar</a>
                                                            <a class="dropdown-item" idAtivo="{{ $t->id }}"
                                                                contexto="{{ $t->ativo_info->id_tipo }}" onclick="abrirModalVender()">Vender</a>
                                                            <a class="dropdown-item" idAtivo="{{ $t->id }}"
                                                                contexto="{{ $t->ativo_info->id_tipo }}" onclick="abrirModalExcluir()">Excluir</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h5 class="card-title text-center mb-0">{{ $t->ativo_info->sigla }} - {{ $t->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right">
                                                    obtido em {{ date('d/m/Y', strtotime($t->data_compra)) }}
                                                </p>
                                                <p class="mt-2 mb-0">Saldo da carteira: R$ {{ number_format($t->valor_unitario*$t->quantidade, 2, ',', '.') }}</p>

                                                @if ($t->ativo_info->id_tipo == 3)
                                                    <p class="m-0">Quantidade: {{ number_format($t->quantidade, 5, ',', '.') }}</p>
                                                @else
                                                    <p class="m-0">Quantidade: {{ intval($t->quantidade) }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="card flex-fill w-100">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Porcentagem dos seus ativos</h5>
                                </div>
                                <div class="card-body d-flex pt-0">
                                    <div class="align-self-center w-100">
                                        <div class="py-3">
                                            <div class="chart chart-xs text-center">
                                                <canvas id="entrada-chart" style="width:100%;max-width:600px"></canvas>
                                            </div>
                                        </div>

                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Ativo</th>
                                                    <th class="text-end">Porcentagem</th>
                                                    <th class="text-end">Cor</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbodyEntrada"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="acoes" role="tabpanel" aria-labelledby="acoes-tab">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="col-md-12">
                                <input type="search" class="form-control text-center search-input" id="search-input-acoes" placeholder="Busque seu ativo...">
                            </div>
                            <div class="col-md-12 cards" id="cards-acoes">
                                @foreach ($acoes as $a)
                                    <div class="card card-ativo my-2 px-2">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                <img class="card-img-top" src="{{ $a->ativo_info->logo }}" alt="Logo da ação">
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <h5 class="card-title text-center mb-0">{{ $a->ativo_info->sigla }} - {{ $a->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right">
                                                    obtido em {{ date('d/m/Y', strtotime($a->data_compra)) }}
                                                </p>
                                                <p class="mt-2 mb-0">Saldo da carteira: R$ {{ number_format($a->valor_unitario*$a->quantidade, 2, ',', '.') }}</p>
                                                <p class="m-0">Quantidade: {{ $a->quantidade }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-4 px-3">
                            <div class="col-md-12 text-right mb-3 p-0">
                                <button class="btn btn-primary w-100" style="height: 50px; border-radius: 0.5rem;" data-toggle="modal" data-target="#adicionarAcao">
                                    ADICIONAR AÇÃO
                                </button>
                            </div>
                            <div class="card flex-fill w-100">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Porcentagem das suas ações</h5>
                                </div>
                                <div class="card-body d-flex pt-0">
                                    <div class="align-self-center w-100">
                                        <div class="py-3">
                                            <div class="chart chart-xs text-center">
                                                <canvas id="acoes-chart" style="width:100%;max-width:600px"></canvas>
                                            </div>
                                        </div>

                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Ativo</th>
                                                    <th class="text-end">Porcentagem</th>
                                                    <th class="text-end">Cor</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbodyAcao"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="fiis" role="tabpanel" aria-labelledby="fiis-tab">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="col-md-12">
                                <input type="search" class="form-control text-center search-input" id="search-input-fiis"
                                    placeholder="Busque seu fundo imobiliário...">
                            </div>
                            <div class="col-md-12 cards" id="cards-fiis">
                                @foreach ($fiis as $f)
                                    <div class="card card-ativo my-2 px-2">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                <img class="card-img-top" src="{{ $f->ativo_info->logo }}" alt="Logo do FII">
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <h5 class="card-title text-center mb-0">{{ $f->ativo_info->sigla }} - {{ $f->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right">
                                                    obtido em {{ date('d/m/Y', strtotime($f->data_compra)) }}
                                                </p>
                                                <p class="mt-2 mb-0">Saldo da carteira: R$ {{ number_format($f->valor_unitario*$f->quantidade, 2, ',', '.') }}</p>
                                                <p class="m-0">Quantidade: {{ $f->quantidade }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-4 px-3">
                            <div class="col-md-12 text-right mb-3 p-0">
                                <button class="btn btn-primary w-100" style="height: 50px; border-radius: 0.5rem;" data-toggle="modal" data-target="#adicionarFii">
                                    ADICIONAR FII
                                </button>
                            </div>
                            <div class="card flex-fill w-100">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Porcentagem dos seus fundos de investimentos imobiliários</h5>
                                </div>
                                <div class="card-body d-flex pt-0">
                                    <div class="align-self-center w-100">
                                        <div class="py-3">
                                            <div class="chart chart-xs text-center">
                                                <canvas id="fiis-chart" style="width:100%;max-width:600px"></canvas>
                                            </div>
                                        </div>

                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Ativo</th>
                                                    <th class="text-end">Porcentagem</th>
                                                    <th class="text-end">Cor</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbodyFii"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="criptos" role="tabpanel" aria-labelledby="criptos-tab">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="col-md-12">
                                <input type="search" class="form-control text-center search-input" id="search-input-criptos"
                                    placeholder="Busque sua criptomoeda...">
                            </div>
                            <div class="col-md-12 cards" id="cards-criptos">
                                @foreach ($criptos as $c)
                                    <div class="card card-ativo my-2 px-2">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                <img class="img-cripto" src="{{ $c->ativo_info->logo }}" alt="Logo da criptomoeda">
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <h5 class="card-title text-center mb-0">{{ $c->ativo_info->sigla }} - {{ $c->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right">
                                                    obtido em {{ date('d/m/Y', strtotime($c->data_compra)) }}
                                                </p>
                                                <p class="mt-2 mb-0">Saldo da carteira: R$ {{ number_format($c->valor_unitario*$c->quantidade, 2, ',', '.') }}</p>
                                                <p class="m-0">Quantidade: {{ $c->quantidade }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-4 px-3">
                            <div class="col-md-12 text-right mb-3 p-0">
                                <button class="btn btn-primary w-100" style="height: 50px; border-radius: 0.5rem;" data-toggle="modal" data-target="#adicionarCripto">
                                    ADICIONAR CRIPTO
                                </button>
                            </div>
                            <div class="card flex-fill w-100">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Porcentagem dos seus criptoativos</h5>
                                </div>
                                <div class="card-body d-flex pt-0">
                                    <div class="align-self-center w-100">
                                        <div class="py-3">
                                            <div class="chart chart-xs text-center">
                                                <canvas id="criptos-chart" style="width:100%;max-width:600px"></canvas>
                                            </div>
                                        </div>

                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Ativo</th>
                                                    <th class="text-end">Porcentagem</th>
                                                    <th class="text-end">Cor</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbodyCripto"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="metas" role="tabpanel" aria-labelledby="metas-tab">...</div>
            </div>
        </div>
    </div>

    @foreach ($todos as $t)
        <!-- Modal = editarAtivo -->
        <div class="modal fade" id="editarAtivo{{ $t->id }}-{{ $t->ativo_info->id_tipo }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edite as informçações do seu ativo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @if ($t->ativo_info->id_tipo == 1)
                        <form action="{{ route('carteira.acao.update', $t->id )}}" method="post">
                    @endif
                    @if ($t->ativo_info->id_tipo == 2)
                        <form action="{{ route('carteira.fundo.update', $t->id )}}" method="post">
                    @endif
                    @if ($t->ativo_info->id_tipo == 3)
                        <form action="{{ route('carteira.cripto.update', $t->id )}}" method="post">
                    @endif
                        @csrf
                        <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <img src="{{ $t->ativo_info->logo }}" width="65px" height="65px" alt="Logo do ativo para edição">
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
                                        <input type="text" class="form-control valor_unitario" name="valor_unitario" id="valor_unitario"
                                            value="{{ $t->valor_unitario }}" required>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label" for="quantidade">Quantidade</label>
                                        <input type="text" class="form-control" name="quantidade" id="quantidade"
                                            placeholder="quantidade até 5 casas decimais"
                                            value="{{ $t->ativo_info->id_tipo == 3 ? number_format($t->quantidade, 5, ',', '.') : intval($t->quantidade) }}" required>
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
                <div class="modal-header">
                    <h5 class="modal-title">Tem certeza que deseja excluir este ativo?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('carteira.acao.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <img src="{{ asset('assets/selecione-um-ativo.png') }}" id="img_logo_acao" width="65px" height="65px" alt="Logo da ação selecionada">
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
                                    <input type="date" class="form-control" name="data_compra_acao" id="data_compra_acao" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="form-label" for="valor_unitario_acao">Qual foi o valor unitário na compra? (R$)</label>
                                    <input type="text" class="form-control valor_unitario" name="valor_unitario_acao" id="valor_unitario_acao"
                                        placeholder="valor unítário" required>
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
                                    <img src="{{ asset('assets/selecione-um-ativo.png') }}" id="img_logo_acao" width="65px" height="65px" alt="Logo da ação selecionada">
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
                                    <input type="date" class="form-control" name="data_compra_acao" id="data_compra_acao" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="form-label" for="valor_unitario_acao">Qual foi o valor unitário na compra? (R$)</label>
                                    <input type="text" class="form-control valor_unitario" name="valor_unitario_acao" id="valor_unitario_acao"
                                        placeholder="valor unítário" required>
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
                                    <img src="{{ asset('assets/selecione-um-ativo.png') }}" id="img_logo_fii" width="65px" height="65px" alt="Logo do FII selecionada">
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
                                    <input type="date" class="form-control" name="data_compra_fii" id="data_compra_fii" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="form-label" for="valor_unitario_fii">Qual foi o valor unitário na compra? (R$)</label>
                                    <input type="text" class="form-control valor_unitario" name="valor_unitario_fii" id="valor_unitario_fii"
                                        placeholder="valor unítário" required>
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
                                    <img src="{{ asset('assets/selecione-um-ativo.png') }}" id="img_logo_cripto" width="65px" height="65px" alt="Logo da cripto selecionada">
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
                                    <input type="date" class="form-control" name="data_compra_cripto" id="data_compra_cripto" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="form-label" for="valor_unitario_cripto">Qual era o valor da moeda na compra? (R$)</label>
                                    <input type="text" class="form-control valor_unitario" name="valor_unitario_cripto" id="valor_unitario_cripto"
                                        placeholder="valor unítário" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="form-label" for="quantidade_cripto">Quantas foram compradas?</label>
                                    <input type="text" class="form-control" name="quantidade_cripto" id="quantidade_cripto"
                                        placeholder="quantidade até 5 casas decimais" required>
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

@endsection

@section('scripts')
    <script>
        $('.valor_unitario').mask('000.000.000,00', { reverse: true });

        function dynamicColors() {
            var r = Math.floor(Math.random() * 255);
            var g = Math.floor(Math.random() * 255);
            var b = Math.floor(Math.random() * 255);
            return "rgb(" + r + "," + g + "," + b + ")";
        };

        document.addEventListener("DOMContentLoaded", function() {

            $('.select2').select2({
                language: {
                    noResults: function() {
                        return "Nenhum resultado encontrado";
                    }
                },
                placeholder: "selecione",
                closeOnSelect: true,
                width: '100%',
            });

            // obter valores para o grafico de entrada
            axios.get(`{{ route('carteira.obterDados') }}`)
            .then(function (response) {

                var xValues = []; // nome
                var yValues = []; // valor
                var barColors = [];

                response.data.forEach(element => {
                    xValues.push(element.nome);
                    yValues.push(element.valor);
                    var color = dynamicColors();
                    barColors.push(color);

                    var tr = `<tr>
                        <td>` + element.nome + `</td>
                        <td class="text-end">` + element.valor + `%</td>
                        <td class="text-end">
                            <i class="fas fa-square-full fa-lg" style="color: ` + color + `;"></i>
                        </td>
                    </tr>`;

                    $("#tbodyEntrada").append(tr);
                });

                new Chart("entrada-chart", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues,
                            borderWidth: 5,
                            borderColor: "#ffffff"
                        }]
                    },
                    options: {
                        title: {
                            display: false
                        },
                        legend: {
                            display: false
                        }
                    }
                });

            })
            .catch(function (error) {
                console.error(error.data);
            });

            // obter valores para o grafico de ações
            axios.get(`{{ route('carteira.acao.obterDados') }}`)
            .then(function (response) {

                var xValues = []; // nome
                var yValues = []; // valor
                var barColors = [];

                response.data.forEach(element => {
                    xValues.push(element.nome);
                    yValues.push(element.valor);
                    var color = dynamicColors();
                    barColors.push(color);

                    var tr = `<tr>
                        <td>` + element.nome + `</td>
                        <td class="text-end">` + element.valor + `%</td>
                        <td class="text-end">
                            <i class="fas fa-square-full fa-lg" style="color: ` + color + `;"></i>
                        </td>
                    </tr>`;

                    $("#tbodyAcao").append(tr);
                });

                new Chart("acoes-chart", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues,
                            borderWidth: 5,
                            borderColor: "#ffffff"
                        }]
                    },
                    options: {
                        title: {
                            display: false
                        },
                        legend: {
                            display: false
                        }
                    }
                });

            })
            .catch(function (error) {
                console.error(error.data);
            });

            // obter valores para o grafico de fiis
            axios.get(`{{ route('carteira.fundo.obterDados') }}`)
            .then(function (response) {

                var xValues = []; // nome
                var yValues = []; // valor
                var barColors = [];

                response.data.forEach(element => {
                    xValues.push(element.nome);
                    yValues.push(element.valor);
                    var color = dynamicColors();
                    barColors.push(color);

                    var tr = `<tr>
                        <td>` + element.nome + `</td>
                        <td class="text-end">` + element.valor + `%</td>
                        <td class="text-end">
                            <i class="fas fa-square-full fa-lg" style="color: ` + color + `;"></i>
                        </td>
                    </tr>`;

                    $("#tbodyFii").append(tr);
                });

                new Chart("fiis-chart", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues,
                            borderWidth: 5,
                            borderColor: "#ffffff"
                        }]
                    },
                    options: {
                        title: {
                            display: false
                        },
                        legend: {
                            display: false
                        }
                    }
                });

            })
            .catch(function (error) {
                console.error(error.data);
            });

            // obter valores para o grafico de criptos
            axios.get(`{{ route('carteira.cripto.obterDados') }}`)
            .then(function (response) {

                var xValues = []; // nome
                var yValues = []; // valor
                var barColors = [];

                response.data.forEach(element => {
                    xValues.push(element.nome);
                    yValues.push(element.valor);
                    var color = dynamicColors();
                    barColors.push(color);

                    var tr = `<tr>
                        <td>` + element.nome + `</td>
                        <td class="text-end">` + element.valor + `%</td>
                        <td class="text-end">
                            <i class="fas fa-square-full fa-lg" style="color: ` + color + `;"></i>
                        </td>
                    </tr>`;

                    $("#tbodyCripto").append(tr);
                });

                new Chart("criptos-chart", {
                    type: "doughnut",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues,
                            borderWidth: 5,
                            borderColor: "#ffffff"
                        }]
                    },
                    options: {
                        title: {
                            display: false
                        },
                        legend: {
                            display: false
                        }
                    }
                });

            })
            .catch(function (error) {
                console.error(error.data);
            });

            $('#acao').change(function() {
                var logo = this.options[this.selectedIndex].getAttribute('logourl');
                var valor = this.options[this.selectedIndex].getAttribute('valor');

                $('#img_logo_acao').attr('src', logo);
                $("#valor_unitario_acao").attr('value', valor);
            });

            $('#fii').change(function() {
                var logo = this.options[this.selectedIndex].getAttribute('logourl');
                var valor = this.options[this.selectedIndex].getAttribute('valor');

                $('#img_logo_fii').attr('src', logo);
                $("#valor_unitario_fii").attr('value', valor);
            });

            $('#cripto').change(function() {
                var logo = this.options[this.selectedIndex].getAttribute('logourl');
                var valor = this.options[this.selectedIndex].getAttribute('valor');

                $('#img_logo_cripto').attr('src', logo);
                $("#valor_unitario_cripto").attr('value', valor);
            });
        });

    </script>
@endsection
