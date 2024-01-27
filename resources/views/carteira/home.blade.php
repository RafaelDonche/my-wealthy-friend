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
                                    <div class="card card-ativo my-2 px-2"
                                        nome="{{ $t->ativo_info->sigla . ' - ' . $t->ativo_info->nome }}"
                                        @if ($t->ativo_info->id_tipo == 1)
                                            rota="{{ route('carteira.acao.show', $t->id) }}"
                                        @endif
                                        @if ($t->ativo_info->id_tipo == 2)
                                            rota="{{ route('carteira.fundo.show', $t->id) }}"
                                        @endif
                                        @if ($t->ativo_info->id_tipo == 3)
                                            rota="{{ route('carteira.cripto.show', $t->id) }}"
                                        @endif
                                        onclick="showInvestimento(this)">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                @if ($t->ativo_info->id_tipo == 3)
                                                    <img class="img-cripto" src="{{ $t->ativo_info->logo }}" alt="Logo do ativo">
                                                @else
                                                    <img class="card-img-top" src="{{ $t->ativo_info->logo }}" alt="Logo do ativo">
                                                @endif
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <h5 class="card-title text-center mb-0">{{ $t->ativo_info->sigla }} - {{ $t->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right">
                                                    obtido em {{ date('d/m/Y', strtotime($t->data_compra)) }}
                                                </p>
                                                <p class="mt-2 mb-0">Saldo do ativo: R$ {{ number_format($t->valor_unitario*$t->quantidade, 2, ',', '.') }}</p>

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
                                                    <th colspan="2" class="pr-0 align-bottom">Total vendido: </th>
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
                                <input type="search" class="form-control text-center search-input" id="search-input-acoes" placeholder="Busque seu ativo...">
                            </div>
                            <div class="col-md-12 cards" id="cards-acoes">
                                @foreach ($acoes as $a)
                                    <div class="card card-ativo my-2 px-2" nome="{{ $a->ativo_info->sigla . ' - ' . $a->ativo_info->nome }}">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                <img class="card-img-top" src="{{ $a->ativo_info->logo }}" alt="Logo do ativo">
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <div class="card-actions float-end">
                                                    <div class="dropdown position-relative">
                                                        <a href="#" data-toggle="dropdown">
                                                            <i class="fas fa-bars"></i>
                                                        </a>
                                                        {{-- div contem informações que são usadas no js para usar na modal --}}
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            nome="{{ $a->ativo_info->sigla.' - '.$a->ativo_info->nome }}"
                                                            saldo="{{ number_format($a->valor_unitario*$a->quantidade, 2, ',', '.') }}"
                                                            logo="{{ $a->ativo_info->logo }}"
                                                            valor="{{ number_format($a->valor_unitario, 2, ',', '.') }}"
                                                            quantidade="{{ $a->quantidade }}"
                                                            idativo="{{ $t->id_ativo }}"
                                                            corretora="{{ $t->corretora }}"
                                                            type-quantidade="number"
                                                            data-compra="{{ $t->data_compra }}">

                                                            <a class="dropdown-item"
                                                                rota="{{ route('carteira.acao.update', $t->id) }}"
                                                                onclick="abrirModalEditar(this)">Editar</a>

                                                            <a class="dropdown-item"
                                                                rota="{{ route('carteira.acao.vender', $a->id) }}"
                                                                onclick="abrirModalVender(this)">Vender</a>

                                                            <a class="dropdown-item"
                                                                rota="{{ route('carteira.acao.destroy', $a->id) }}"
                                                                onclick="abrirModalExcluir(this)">Excluir</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h5 class="card-title text-center mb-0">{{ $a->ativo_info->sigla }} - {{ $a->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right">
                                                    obtido em {{ date('d/m/Y', strtotime($a->data_compra)) }}
                                                </p>
                                                <p class="mt-2 mb-0">Saldo do ativo: R$ {{ number_format($a->valor_unitario*$a->quantidade, 2, ',', '.') }}</p>
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
                                                    <th colspan="2" class="pr-0 align-bottom">Total vendido: </th>
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
                                    <div class="card card-ativo my-2 px-2" nome="{{ $f->ativo_info->sigla . ' - ' . $f->ativo_info->nome }}">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                <img class="card-img-top" src="{{ $f->ativo_info->logo }}" alt="Logo do FII">
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <div class="card-actions float-end">
                                                    <div class="dropdown position-relative">
                                                        <a href="#" data-toggle="dropdown">
                                                            <i class="fas fa-bars"></i>
                                                        </a>
                                                        {{-- div contem informações que são usadas no js para usar na modal --}}
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            nome="{{ $f->ativo_info->sigla.' - '.$f->ativo_info->nome }}"
                                                            saldo="{{ number_format($f->valor_unitario*$f->quantidade, 2, ',', '.') }}"
                                                            logo="{{ $f->ativo_info->logo }}"
                                                            valor="{{ number_format($f->valor_unitario, 2, ',', '.') }}"
                                                            quantidade="{{ $f->quantidade }}"
                                                            idativo="{{ $t->id_ativo }}"
                                                            corretora="{{ $t->corretora }}"
                                                            type-quantidade="number"
                                                            data-compra="{{ $t->data_compra }}">

                                                            <a class="dropdown-item"
                                                                rota="{{ route('carteira.fundo.update', $t->id) }}"
                                                                onclick="abrirModalEditar(this)">Editar</a>

                                                            <a class="dropdown-item"
                                                                rota="{{ route('carteira.fundo.vender', $f->id) }}"
                                                                onclick="abrirModalVender(this)">Vender</a>

                                                            <a class="dropdown-item"
                                                                rota="{{ route('carteira.fundo.destroy', $f->id) }}"
                                                                onclick="abrirModalExcluir(this)">Excluir</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h5 class="card-title text-center mb-0">{{ $f->ativo_info->sigla }} - {{ $f->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right">
                                                    obtido em {{ date('d/m/Y', strtotime($f->data_compra)) }}
                                                </p>
                                                <p class="mt-2 mb-0">Saldo do ativo: R$ {{ number_format($f->valor_unitario*$f->quantidade, 2, ',', '.') }}</p>
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
                                                    <th colspan="2" class="pr-0 align-bottom">Total vendido: </th>
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
                                    <div class="card card-ativo my-2 px-2" nome="{{ $c->ativo_info->sigla . ' - ' . $c->ativo_info->nome }}">
                                        <div class="card-body row align-items-center">
                                            <div class="col-md-3 text-center col-img">
                                                <img class="img-cripto" src="{{ $c->ativo_info->logo }}" alt="Logo da criptomoeda">
                                            </div>
                                            <div class="col-md-9 inner-body">
                                                <div class="card-actions float-end">
                                                    <div class="dropdown position-relative">
                                                        <a href="#" data-toggle="dropdown">
                                                            <i class="fas fa-bars"></i>
                                                        </a>
                                                        {{-- div contem informações que são usadas no js para usar na modal --}}
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            nome="{{ $c->ativo_info->sigla.' - '.$c->ativo_info->nome }}"
                                                            saldo="{{ number_format($c->valor_unitario*$c->quantidade, 2, ',', '.') }}"
                                                            logo="{{ $c->ativo_info->logo }}"
                                                            valor="{{ number_format($c->valor_unitario, 2, ',', '.') }}"
                                                            quantidade="{{ number_format($c->quantidade, 5, ',', '.') }}"
                                                            idativo="{{ $t->id_ativo }}"
                                                            corretora="{{ $t->corretora }}"
                                                            type-quantidade="text"
                                                            data-compra="{{ $t->data_compra }}">

                                                            <a class="dropdown-item"
                                                                rota="{{ route('carteira.cripto.update', $t->id) }}"
                                                                onclick="abrirModalEditar(this)">Editar</a>

                                                            <a class="dropdown-item"
                                                                rota="{{ route('carteira.cripto.vender', $c->id) }}"
                                                                onclick="abrirModalVender(this)">Vender</a>

                                                            <a class="dropdown-item"
                                                                rota="{{ route('carteira.cripto.destroy', $c->id) }}"
                                                                onclick="abrirModalExcluir(this)">Excluir</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h5 class="card-title text-center mb-0">{{ $c->ativo_info->sigla }} - {{ $c->ativo_info->nome }}</h5>
                                                <p class="text-muted text-right">
                                                    obtido em {{ date('d/m/Y', strtotime($c->data_compra)) }}
                                                </p>
                                                <p class="mt-2 mb-0">Saldo do ativo: R$ {{ number_format($c->valor_unitario*$c->quantidade, 2, ',', '.') }}</p>
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
                                                    <th colspan="2" class="pr-0 align-bottom">Total vendido: </th>
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
                <div class="tab-pane fade" id="metas" role="tabpanel" aria-labelledby="metas-tab">...</div>
            </div>
        </div>
    </div>

    @include('carteira.home-modals')

@endsection

@section('scripts')
    <script src="{{ asset('js/home/busca.js') }}"></script>
    <script src="{{ asset('js/home/select.js') }}"></script>
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
            var rota = element.getAttribute("rota"); console.log(rota);

            window.location.href = rota;
        }

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
                console.error(error.data);
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
                console.error(error.data);
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
                console.error(error.data);
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
                console.error(error.data);
            });
        });
    </script>
@endsection
