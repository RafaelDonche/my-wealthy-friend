@extends('layout-main')

@section('content')

    <style>

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
            -webkit-box-shadow: inset 0 0 14px rgba(0,0,0,0.6);
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .card-ativo {
            width: 100% !important;
            border-radius: 15px;
        }

        .card-ativo:hover {
            cursor: pointer;
            transform: scale(1.01);
            box-shadow: 0px 6px 6px 4px rgba(0, 0, 0, 0.15);
        }

        .card-meta {
            width: 100% !important;
            border-radius: 15px !important;
            background-color: #ced4da !important;
            box-shadow: 0px 10px 10px 4px rgba(0, 0, 0, 0.1) !important;
            padding: 0.5rem !important;
            border: none !important;
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

        .badge {
            font-size: 1rem !important;
        }

        .text-sm {
            font-size: 12px;
        }

        .text-sm2 {
            font-size: 14px;
        }

        .card-header-metas {
            background-color: transparent !important;
            padding: 0 !important;
            border: none;
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
                                @foreach ($acoes as $a)
                                    <div class="card card-ativo my-2 px-2"
                                        nome="{{ $a->ativo_info->sigla . ' - ' . $a->ativo_info->nome }}"
                                        data={{ $a->created_at }}
                                        rota="{{ route('carteira.acao.show', $a->id) }}"
                                        onclick="showInvestimento(this)">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                <img class="card-img-top" src="{{ $a->ativo_info->logo }}" alt="Logo do ativo">
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <h5 class="card-title text-center mb-0">{{ $a->ativo_info->sigla }} - {{ $a->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right text-sm2">
                                                    cadastrado em {{ date('d/m/Y', strtotime($a->created_at)) }}
                                                </p>

                                                <p class="mt-2 mb-0">
                                                    Valor atual:
                                                    @if ($a->valorAtual() > $a->valorAtualInvestido())
                                                        <span class="badge badge-success">
                                                    @else
                                                        @if ($a->valorAtual() == $a->valorAtualInvestido())
                                                            <span class="badge badge-secondary">
                                                        @else
                                                            <span class="badge badge-danger">
                                                        @endif
                                                    @endif
                                                        R$ {{ number_format($a->valorAtual(), 2, ',', '.') }}
                                                    </span>
                                                </p>
                                                <p class="m-0">Quantidade: {{ $a->quantidadeAtual() }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach ($fiis as $f)
                                    <div class="card card-ativo my-2 px-2"
                                        nome="{{ $f->ativo_info->sigla . ' - ' . $f->ativo_info->nome }}"
                                        data={{ $f->created_at }}
                                        rota="{{ route('carteira.fundo.show', $f->id) }}"
                                        onclick="showInvestimento(this)">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                <img class="card-img-top" src="{{ $f->ativo_info->logo }}" alt="Logo do FII">
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <h5 class="card-title text-center mb-0">{{ $f->ativo_info->sigla }} - {{ $f->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right text-sm2">
                                                    cadastrado em {{ date('d/m/Y', strtotime($f->created_at)) }}
                                                </p>

                                                <p class="mt-2 mb-0">
                                                    Valor atual:
                                                    @if ($f->valorAtual() > $f->valorAtualInvestido())
                                                        <span class="badge badge-success">
                                                    @else
                                                        @if ($f->valorAtual() == $f->valorAtualInvestido())
                                                            <span class="badge badge-secondary">
                                                        @else
                                                            <span class="badge badge-danger">
                                                        @endif
                                                    @endif
                                                        R$ {{ number_format($f->valorAtual(), 2, ',', '.') }}
                                                    </span>
                                                </p>
                                                <p class="m-0">Quantidade: {{ $f->quantidadeAtual() }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @foreach ($criptos as $c)
                                    <div class="card card-ativo my-2 px-2"
                                        nome="{{ $c->ativo_info->sigla . ' - ' . $c->ativo_info->nome }}"
                                        data={{ $c->created_at }}
                                        rota="{{ route('carteira.cripto.show', $c->id) }}"
                                        onclick="showInvestimento(this)">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                <img class="img-cripto" src="{{ $c->ativo_info->logo }}" alt="Logo da criptomoeda">
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <h5 class="card-title text-center mb-0">{{ $c->ativo_info->sigla }} - {{ $c->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right text-sm2">
                                                    cadastrado em {{ date('d/m/Y', strtotime($c->created_at)) }}
                                                </p>

                                                <p class="mt-2 mb-0">
                                                    Valor atual:
                                                    @if ($c->valorAtual() > $c->valorAtualInvestido())
                                                        <span class="badge badge-success">
                                                    @else
                                                        @if ($c->valorAtual() == $c->valorAtualInvestido())
                                                            <span class="badge badge-secondary">
                                                        @else
                                                            <span class="badge badge-danger">
                                                        @endif
                                                    @endif
                                                        R$ {{ number_format($c->valorAtual(), 2, ',', '.') }}
                                                    </span>
                                                </p>
                                                <p class="m-0">Quantidade: {{ $c->quantidadeAtual() }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="card flex-fill w-100">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Porcentagem dos seus ativos <span class="text-muted text-sm">(referente ao valor atual)</span></h5>
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
                                                    <th class="align-top">Tipo de ativo</th>
                                                    <th class="align-top text-end">%</th>
                                                    <th class="align-top text-end">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbodyEntrada"></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2" class="pr-0 align-bottom">Saldo da carteira: </th>
                                                    <th class="align-bottom text-end" id="totalEntrada"></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="pr-0 align-bottom">Total de vendas: </th>
                                                    <th class="align-bottom text-end" id="totalEntradaVendidas"></th>
                                                </tr>
                                            </tfoot>
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
                                <input type="search" class="form-control text-center search-input" id="search-input-acoes" placeholder="Busque sua ação...">
                            </div>
                            <div class="col-md-12 cards" id="cards-acoes">
                                @foreach ($acoes as $a)
                                    <div class="card card-ativo my-2 px-2"
                                        nome="{{ $a->ativo_info->sigla . ' - ' . $a->ativo_info->nome }}"
                                        rota="{{ route('carteira.acao.show', $a->id) }}"
                                        onclick="showInvestimento(this)">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                <img class="card-img-top" src="{{ $a->ativo_info->logo }}" alt="Logo do ativo">
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <h5 class="card-title text-center mb-0">{{ $a->ativo_info->sigla }} - {{ $a->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right text-sm2">
                                                    cadastrado em {{ date('d/m/Y', strtotime($a->created_at)) }}
                                                </p>

                                                <p class="mt-2 mb-0">
                                                    Valor atual:
                                                    @if ($a->valorAtual() > $a->valorAtualInvestido())
                                                        <span class="badge badge-success">
                                                    @else
                                                        @if ($a->valorAtual() == $a->valorAtualInvestido())
                                                            <span class="badge badge-secondary">
                                                        @else
                                                            <span class="badge badge-danger">
                                                        @endif
                                                    @endif
                                                        R$ {{ number_format($a->valorAtual(), 2, ',', '.') }}
                                                    </span>
                                                </p>
                                                <p class="m-0">Quantidade: {{ $a->quantidadeAtual() }}</p>
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
                                    <h5 class="card-title mb-0">Porcentagem das suas ações <span class="text-muted text-sm">(referente ao valor atual)</span></h5>
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
                                                    <th class="align-top">Tipo de ativo</th>
                                                    <th class="align-top text-end">%</th>
                                                    <th class="align-top text-end">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbodyAcao"></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2" class="pr-0 align-bottom">Saldo da carteira: </th>
                                                    <th class="align-bottom text-end" id="totalAcoes"></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="pr-0 align-bottom">Total de vendas: </th>
                                                    <th class="align-bottom text-end" id="totalAcoesVendidas"></th>
                                                </tr>
                                            </tfoot>
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
                                    <div class="card card-ativo my-2 px-2"
                                        nome="{{ $f->ativo_info->sigla . ' - ' . $f->ativo_info->nome }}"
                                        rota="{{ route('carteira.fundo.show', $f->id) }}"
                                        onclick="showInvestimento(this)">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                <img class="card-img-top" src="{{ $f->ativo_info->logo }}" alt="Logo do FII">
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <h5 class="card-title text-center mb-0">{{ $f->ativo_info->sigla }} - {{ $f->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right text-sm2">
                                                    cadastrado em {{ date('d/m/Y', strtotime($f->created_at)) }}
                                                </p>

                                                <p class="mt-2 mb-0">
                                                    Valor atual:
                                                    @if ($f->valorAtual() > $f->valorAtualInvestido())
                                                        <span class="badge badge-success">
                                                    @else
                                                        @if ($f->valorAtual() == $f->valorAtualInvestido())
                                                            <span class="badge badge-secondary">
                                                        @else
                                                            <span class="badge badge-danger">
                                                        @endif
                                                    @endif
                                                        R$ {{ number_format($f->valorAtual(), 2, ',', '.') }}
                                                    </span>
                                                </p>
                                                <p class="m-0">Quantidade: {{ $f->quantidadeAtual() }}</p>
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
                                    <h5 class="card-title mb-0">Porcentagem dos seus fundos de investimentos imobiliários <span class="text-muted text-sm">(referente ao valor atual)</span></h5>
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
                                                    <th class="align-top">Tipo de ativo</th>
                                                    <th class="align-top text-end">%</th>
                                                    <th class="align-top text-end">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbodyFii"></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2" class="pr-0 align-bottom">Saldo da carteira: </th>
                                                    <th class="align-bottom text-end" id="totalFiis"></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="pr-0 align-bottom">Total de vendas: </th>
                                                    <th class="align-bottom text-end" id="totalFiisVendidas"></th>
                                                </tr>
                                            </tfoot>
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
                                    <div class="card card-ativo my-2 px-2"
                                        nome="{{ $c->ativo_info->sigla . ' - ' . $c->ativo_info->nome }}"
                                        rota="{{ route('carteira.cripto.show', $c->id) }}"
                                        onclick="showInvestimento(this)">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                <img class="img-cripto" src="{{ $c->ativo_info->logo }}" alt="Logo da criptomoeda">
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <h5 class="card-title text-center mb-0">{{ $c->ativo_info->sigla }} - {{ $c->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right text-sm2">
                                                    cadastrado em {{ date('d/m/Y', strtotime($c->created_at)) }}
                                                </p>

                                                <p class="mt-2 mb-0">
                                                    Valor atual:
                                                    @if ($c->valorAtual() > $c->valorAtualInvestido())
                                                        <span class="badge badge-success">
                                                    @else
                                                        @if ($c->valorAtual() == $c->valorAtualInvestido())
                                                            <span class="badge badge-secondary">
                                                        @else
                                                            <span class="badge badge-danger">
                                                        @endif
                                                    @endif
                                                        R$ {{ number_format($c->valorAtual(), 2, ',', '.') }}
                                                    </span>
                                                </p>
                                                <p class="m-0">Quantidade: {{ $c->quantidadeAtual() }}</p>
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
                                    <h5 class="card-title mb-0">Porcentagem dos seus criptoativos <span class="text-muted text-sm">(referente ao valor atual)</span></h5>
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
                                                    <th class="align-top">Tipo de ativo</th>
                                                    <th class="align-top text-end">%</th>
                                                    <th class="align-top text-end">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbodyCripto"></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2" class="pr-0 align-bottom">Saldo da carteira: </th>
                                                    <th class="align-bottom text-end" id="totalCriptos"></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="pr-0 align-bottom">Total de vendas: </th>
                                                    <th class="align-bottom text-end" id="totalCriptosVendidas"></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="metas" role="tabpanel" aria-labelledby="metas-tab">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="col-md-12">
                                <input type="search" class="form-control text-center search-input" id="search-input-metas"
                                    placeholder="Busque sua meta...">
                            </div>
                            <div class="col-md-12 cards" id="cards-metas">
                                @foreach ($metas as $m)
                                    <div class="card card-meta my-3 px-2"
                                        nome="{{ $m->nome }}">
                                        <div class="card-header card-header-metas">
                                            <div class="card-actions float-end">
                                                <div class="dropdown position-relative">
                                                    <a href="#" data-toggle="dropdown" data-display="static">
                                                        <i class="fas fa-cog fa-lg"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        rota_editar="{{ route('carteira.meta.update', $m->id) }}"
                                                        rota_excluir="{{ route('carteira.meta.destroy', $m->id) }}"
                                                        nome="{{ $m->nome }}"
                                                        descricao="{{ $m->descricao }}"
                                                        valor="{{ number_format($m->valor, 2, ',', '.') }}"
                                                        data_fim="{{ $m->data_fim }}"
                                                        data_fim_formatada="{{ date('d/m/Y', strtotime($m->data_fim)) }}"
                                                        tipo_acao="{{ $m->tipo_acao_ativo() }}"
                                                        tipo_fii="{{ $m->tipo_fii_ativo() }}"
                                                        tipo_cripto="{{ $m->tipo_cripto_ativo() }}">
                                                        <a class="dropdown-item" onclick="abrirModalEditarMeta(this)">Editar</a>
                                                        <a class="dropdown-item" onclick="abrirModalExcluirMeta(this)">Excluir</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="card-title text-center mb-0">{{ $m->nome }}</h5>
                                            <p class="text-muted text-right text-sm2 mb-0 mt-2">
                                                cadastrado em {{ date('d/m/Y', strtotime($m->created_at)) }}
                                            </p>
                                        </div>
                                        <div class="card-body row align-items-center p-0">
                                            <div class="col-md-3 d-flex justify-content-center">
                                                <svg width="146" height="146" viewBox="-18.25 -18.25 182.5 182.5" version="1.1" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(-90deg)">
                                                    <circle r="63" cx="73" cy="73" fill="transparent" stroke="#9eaeff" stroke-width="30" stroke-dasharray="395.64px" stroke-dashoffset="0"></circle>
                                                    <circle r="63" cx="73" cy="73" stroke="#294bf5" stroke-width="21" stroke-linecap="round" stroke-dashoffset="{{ 395.64 * ((100 - $m->porcentagemAtual()) / 100) }}" fill="transparent" stroke-dasharray="395.64px"></circle>
                                                    <text x="42px" y="79px" fill="#294bf5" font-size="20px" font-weight="bold" style="transform:rotate(90deg) translate(0px, -142px)">{{ number_format($m->porcentagemAtual(), 2, ',', '.') }}%</text>
                                                </svg>
                                            </div>
                                            <div class="col-md-9">
                                                <p class="text-justify my-1">{{ $m->descricao }}</p>
                                                <p class="m-0"><strong>Data fim: {{ date('d/m/Y', strtotime($m->data_fim)) }}</strong></p>
                                                <p class="m-0"><strong>Valor da meta: R$ {{ number_format($m->valor, 2, ',', '.') }}</strong></p>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex justify-content-center" style="background-color: transparent;">
                                            @foreach ($m->tipos as $t)
                                                <span class="mx-3">
                                                    <i class="fas fa-circle fa-sm" style="color: rgb(50, 50, 255)"></i>
                                                    {{ $t->tipo->nome }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-4 px-3">
                            <div class="card flex-fill w-100">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Adicionar meta</h5>
                                </div>
                                <div class="card-body d-flex pt-0">
                                    <form action="{{ route('carteira.meta.store') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12 my-2">
                                                <label class="form-label" for="nome_meta">Qual o nome da meta?</label>
                                                <input class="form-control" type="text" name="nome_meta" required>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="form-label" for="descricao_meta">Descreva:</label>
                                                <textarea class="form-control" name="descricao_meta" id="descricao_meta" rows="5"></textarea>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label class="form-label" for="valor_meta">Qual o valor alvo?</label>
                                                <input class="form-control valor_unitario" type="text" name="valor_meta" required>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label class="form-label" for="tipo_data_fim">Esta meta tera fim em:</label>
                                                <select class="form-control" name="tipo_data_fim" id="tipo_data_fim">
                                                    <option value="1">daqui 1 mês</option>
                                                    <option value="2">daqui 3 meses</option>
                                                    <option value="3">daqui 6 meses</option>
                                                    <option value="4">daqui 1 ano</option>
                                                    <option value="5">data personalizada</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-2 d-none" id="data_personalizada">
                                                <label class="form-label" for="data_fim_meta">Data personalizada para o fim da meta:</label>
                                                <input class="form-control" type="date" name="data_fim_meta" id="data_fim_meta">
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="form-label" for="tipo_meta">Esta meta deve ser referente a:</label>
                                                <select class="form-control select-multiple" name="tipo_meta[]" id="tipo_meta" multiple="multiple" required>
                                                    @foreach ($tipo_metas as $tm)
                                                        <option value="{{ $tm->id }}" selected>{{ $tm->nome }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-12 my-2">
                                                <button type="submit" class="btn btn-primary w-100" style="height: 40px; border-radius: 0.5rem;">Adicionar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('carteira.home-modals')

@endsection

@section('scripts')
    <script src="{{ asset('js/home/busca.js') }}"></script>
    <script src="{{ asset('js/home/select.js') }}"></script>
    <script src="{{ asset('js/home/ordenarDivs.js') }}"></script>
    <script src="{{ asset('js/home/abrirModal.js') }}"></script>

    <script>
        $('.valor_unitario').mask('000.000.000,00', { reverse: true });

        function dynamicColors() {
            var r = Math.floor(10 + Math.random() * 245);
            var g = Math.floor(150 + Math.random() * 105);
            var b = Math.floor(200 + Math.random() * 55);
            return "rgb(" + r + "," + g + "," + b + ")";
        };

        function showInvestimento(element) {
            var rota = element.getAttribute("rota");

            window.location.href = rota;
        }

        document.addEventListener("DOMContentLoaded", function() {

            orderDesc("#cards-entrada", "data");

            // obter valores para o grafico de entrada
            axios.get(`{{ route('carteira.obterDados') }}`)
            .then(function (response) {

                var xValues = [];
                var yValues = [];
                var barColors = [];

                response.data.dados.forEach(element => {
                    xValues.push(element.nome);
                    yValues.push(element.porcentagem);
                    var color = dynamicColors();
                    barColors.push(color);

                    var tr = `<tr>
                        <td class="align-bottom"><i class="fas fa-square-full fa-lg" style="color: ` + color + `;"></i> ` + element.nome + `</td>
                        <td class="align-bottom text-end">` + element.porcentagem + `</td>
                        <td class="align-bottom text-end">R$ ` + element.soma + `</td>
                    </tr>`;

                    $("#tbodyEntrada").append(tr);
                });

                $('#totalEntrada').html("R$ " + response.data.total);

                $('#totalEntradaVendidas').html("R$ " + response.data.somaTotalVendidas);

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
                console.error(error);
            });

            // obter valores para o grafico de ações
            axios.get(`{{ route('carteira.acao.obterDados') }}`)
            .then(function (response) {

                var xValues = [];
                var yValues = [];
                var barColors = [];

                response.data.dados.forEach(element => {
                    xValues.push(element.nome);
                    yValues.push(element.porcentagem);
                    var color = dynamicColors();
                    barColors.push(color);

                    var tr = `<tr>
                        <td class="align-bottom"><i class="fas fa-square-full fa-lg" style="color: ` + color + `;"></i> ` + element.nome + `</td>
                        <td class="align-bottom text-end">` + element.porcentagem + `</td>
                        <td class="align-bottom text-end">R$ ` + element.valor + `</td>
                    </tr>`;

                    $("#tbodyAcao").append(tr);
                });

                $('#totalAcoes').html("R$ " + response.data.total);

                $('#totalAcoesVendidas').html("R$ " + response.data.somaTotalVendidas);

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
                console.error(error);
            });

            // obter valores para o grafico de fiis
            axios.get(`{{ route('carteira.fundo.obterDados') }}`)
            .then(function (response) {

                var xValues = [];
                var yValues = [];
                var barColors = [];

                response.data.dados.forEach(element => {
                    xValues.push(element.nome);
                    yValues.push(element.porcentagem);
                    var color = dynamicColors();
                    barColors.push(color);

                    var tr = `<tr>
                        <td class="align-bottom"><i class="fas fa-square-full fa-lg" style="color: ` + color + `;"></i> ` + element.nome + `</td>
                        <td class="align-bottom text-end">` + element.porcentagem + `</td>
                        <td class="align-bottom text-end">R$ ` + element.valor + `</td>
                    </tr>`;

                    $("#tbodyFii").append(tr);
                });

                $('#totalFiis').html("R$ " + response.data.total);

                $('#totalFiisVendidas').html("R$ " + response.data.somaTotalVendidas);

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
                console.error(error);
            });

            // obter valores para o grafico de criptos
            axios.get(`{{ route('carteira.cripto.obterDados') }}`)
            .then(function (response) {

                var xValues = [];
                var yValues = [];
                var barColors = [];

                response.data.dados.forEach(element => {
                    xValues.push(element.nome);
                    yValues.push(element.porcentagem);
                    var color = dynamicColors();
                    barColors.push(color);

                    var tr = `<tr>
                        <td class="align-bottom"><i class="fas fa-square-full fa-lg" style="color: ` + color + `;"></i> ` + element.nome + `</td>
                        <td class="align-bottom text-end">` + element.porcentagem + `</td>
                        <td class="align-bottom text-end">R$ ` + element.valor + `</td>
                    </tr>`;

                    $("#tbodyCripto").append(tr);
                });

                $('#totalCriptos').html("R$ " + response.data.total);

                $('#totalCriptosVendidas').html("R$ " + response.data.somaTotalVendidas);

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
                console.error(error);
            });

            $('#tipo_data_fim').change(function() {
                if (this.value == 5) {
                    $('#data_personalizada').removeClass('d-none');
                    $('#data_fim_meta').attr('required', 'required');
                    $('#data_fim_meta').trigger('focus');
                }else {
                    if ($('#data_personalizada').hasClass('d-none') == false) {
                        $('#data_personalizada').addClass('d-none');
                    }
                    $('#data_fim_meta').removeAttr('required');
                }
            });
        });

    </script>
@endsection
