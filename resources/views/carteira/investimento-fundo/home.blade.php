@extends('layout-main')

@section('content')
    <style>
        .img-top {
            box-shadow: 0px 10px 10px 4px rgba(0, 0, 0, 0.1);
            width: 3rem;
            height: 3rem;
        }

        @media (min-width: 1100px) {
            .img-top {
                width: 5rem;
                height: 5rem;
            }
        }

        .sigla {
            font-size: 20px;
        }

        .texto-logo {
            font-size: 16px;
        }

        .card-empresa {
            background-color: #ECECEC !important;
            border-color: transparent !important;
            border-radius: 10px;
        }

        .card-body-empresa {
            overflow-y: scroll;
            overflow-x: hidden;
            height: 300px;
            font-size: 14px;
            text-align: justify;
            margin-bottom: 0.5rem;
        }

        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.5);
        }

        .texto-empresa {
            font-size: 16px;
        }

        .btn-action {
            border-radius: 20px;
            color: white !important;
            background-color: #201f61;
            border-color: transparent;
        }

        .btn-action:hover {
            background-color: #121144;
        }

        .fa-trash {
            color: rgb(138, 0, 0);
        }

        .fa-trash:hover {
            color: rgb(105, 1, 1);
        }

        .title-rendimentos {
            font-size: 20px;
            /* font-weight: bold; */
        }

        .card-header-compras {
            background-color: rgba(0, 138, 23, 0.315);
        }

        .card-header-vendas {
            background-color: rgba(138, 0, 0, 0.315);
        }

        .card-footer-grafico {
            background-color: rgba(162, 156, 255, 0.315);
        }

        .card-footer-grafico p {
            color: black;
        }

        .badge {
            font-size: 1rem !important;
        }

        .pointer:hover {
            cursor: pointer;
        }

        .text-sm {
            font-size: 13px;
        }

    /* Estilo para a paginação */
    .dataTables_paginate {
        font-size: 14px; /* Ajuste o tamanho da fonte conforme necessário */
    }

    /* Estilo para os botões de paginação (se necessário) */
    .dataTables_paginate .paginate_button {
        font-size: 14px; /* Ajuste o tamanho da fonte conforme necessário */
    }
    </style>

    @include('errors.alerts')
    @include('errors.errors')

    <div class="container-fluid">
        <div class="row p-3">
            <div class="col-md-3 p-3">
                <div class="col-12 col-md-12 p-0 mb-3">
                    <div class="card">
                        <div class="card-body py-4">
                            <div class="d-flex justify-content-between">
                                <div class="flex-grow-1">
                                    <h3 class="mb-2">{{ $item->ativo_info->sigla }}</h3>
                                    <p class="mb-1">
                                        Data de cadastro:
                                        {{ date('d/m/Y', strtotime($item->created_at)) }}
                                    </p>
                                    <p class="mb-1">Você possui: {{ $item->quantidadeAtual() }} unidades</p>
                                    <p class="mb-1">
                                        Cotação atual:
                                        R$ {{ number_format($item->ativo_info->ultimo_dia_historico()->valor_fechamento, 2, ',', '.') }}
                                    </p>
                                    <p class="mb-4">
                                        Quanto vale hoje:
                                        R$ {{ number_format($item->valorAtual(), 2, ',', '.') }}
                                    </p>
                                </div>
                                <div class="d-flex align-items-center ms-3">
                                    <img class="img-top" src="{{ $item->ativo_info->logo }}" alt="Logo">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p class="mb-1">
                                Lucro realizado:
                                @if ($item->diferencaCompraVenda() > 0)
                                    <span class="badge badge-success">
                                @else
                                    @if ($item->diferencaCompraVenda() == 0)
                                        <span class="badge badge-secondary">
                                    @else
                                        <span class="badge badge-danger">
                                    @endif
                                @endif
                                    R$ {{ number_format($item->diferencaCompraVenda(), 2, ',', '.') }}
                                </span>
                            </p>
                            <p class="mb-1">
                                Preço médio por unidade:
                                @if (strval($item->precoMediaCompras()) < $item->ativo_info->ultimo_dia_historico()->valor_fechamento)
                                    <span class="badge badge-success">
                                @else
                                    @if (strval($item->precoMediaCompras()) == $item->ativo_info->ultimo_dia_historico()->valor_fechamento)
                                        <span class="badge badge-secondary">
                                    @else
                                        <span class="badge badge-danger">
                                    @endif
                                @endif
                                    R$ {{ number_format($item->precoMediaCompras(), 2, ',', '.') }}
                                </span>
                            </p>
                            <p class="mb-1">
                                Valor atual investido:
                                @if (strval($item->valorAtualInvestido()) < strval($item->valorAtual()))
                                    <span class="badge badge-success">
                                @else
                                    @if (strval($item->valorAtualInvestido()) == strval($item->valorAtual()))
                                        <span class="badge badge-secondary">
                                    @else
                                        <span class="badge badge-danger">
                                    @endif
                                @endif
                                    R$ {{ number_format($item->valorAtualInvestido(), 2, ',', '.') }}
                                </span>
                            </p>
                            <p class="mb-1">
                                Seu lucro é:
                                @if ($item->saldoAtivo() > 0)
                                    <span class="badge badge-success">
                                @else
                                    @if ($item->saldoAtivo() == 0)
                                        <span class="badge badge-secondary">
                                    @else
                                        <span class="badge badge-danger">
                                    @endif
                                @endif
                                    R$ {{ number_format($item->saldoAtivo(), 2, ',', '.') }}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card card-empresa p-2 mb-3">
                    <div class="card-header-empresa">
                        <p class="sigla mb-2 text-center">{{ $item->ativo_info->nome }}</p>
                        <p class="texto-empresa mb-2 text-left">Setor: {{ $item->ativo_info->id_segmento != null ? $item->ativo_info->segmento->nome : "" }}</p>
                        <p class="texto-empresa mb-2 text-left" id="website_empresa">{{ isset($item->ativo_info->empresa) ? $item->ativo_info->empresa->website : "" }}</p>
                        <p class="texto-empresa mb-2 text-left" id="cidade_empresa">{{ isset($item->ativo_info->empresa) ? $item->ativo_info->empresa->lugar() : "" }}</p>
                    </div>
                    <div class="card-body card-body-empresa">
                        {{ isset($item->ativo_info->empresa) ? $item->ativo_info->empresa->sumario : "" }}
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-header-secondary">
                        <h5 class="card-title mb-0">Proventos</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped proventosTable my-0">
                            <thead>
                                <tr>
                                    <th>Valor</th>
                                    <th>Data Com</th>
                                    <th>Tipo</th>
                                    <th>Data de pagamento</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($item->ativo_info->proximos_proventos as $p)
                                    <tr>
                                        <td>R$ {{ number_format($p->valor, 2, ',', '.') }}</td>
                                        <td>{{ date('d/m/Y', strtotime($p->data_com)) }}</td>
                                        <td>{{ $p->label }}</td>
                                        <td>{{ date('d/m/Y', strtotime($p->data_pagamento)) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-9 p-3">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="float-end div-btns" nome="{{ $item->ativo_info->sigla . ' - ' . $item->ativo_info->nome }}"
                            saldo="{{ number_format($item->saldoAtivo(), 2, ',', '.') }}"
                            logo="{{ $item->ativo_info->logo }}"
                            quantidade="{{ $item->quantidadeAtual() }}"
                            idativo="{{ $item->id_ativo }}">

                            <a class="btn btn-sm btn-action my-1"
                                rota="{{ route('carteira.fundo.compra.store', $item->id) }}"
                                onclick="abrirModalComprar(this)">Comprar</a>
                            <a class="btn btn-sm btn-action my-1"
                                rota="{{ route('carteira.fundo.venda.store', $item->id) }}"
                                onclick="abrirModalVender(this)">Vender</a>
                            <a class="btn m-1" rota="{{ route('carteira.fundo.destroy', $item->id) }}"
                                onclick="abrirModalExcluir(this)">
                                <i class="fas fa-trash fa-lg"></i>
                            </a>
                        </div>
                        <span class="title-rendimentos align-end">Compras e vendas</span>
                    </div>
                    <div class="col-md-6 mt-1">
                        <div class="card">
                            <div class="card-body p-0">
                                <canvas id="comprasChart" style="width:100%;max-width:650px"></canvas>
                            </div>
                            <div class="card-footer card-footer-grafico">
                                <p class="float-end m-0">Saldo de compras: R$ {{ number_format($item->saldoCompras(), 2, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-1">
                        <div class="card">
                            <div class="card-body p-0">
                                <canvas id="vendasChart" style="width:100%;max-width:650px"></canvas>
                            </div>
                            <div class="card-footer card-footer-grafico">
                                <p class="float-end m-0">Saldo de vendas: R$ {{ number_format($item->saldoVendas(), 2, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="card-header card-header-compras">
                                <h5 class="card-title mb-0">Compras deste ativo</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped myDataTable my-0">
                                    <thead>
                                        <tr>
                                            <th>Data da compra</th>
                                            <th>Quantidade</th>
                                            <th>Valor unitário</th>
                                            <th>Corretora</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($item->compras as $c)
                                            <tr>
                                                <td>{{ date('d/m/Y', strtotime($c->data_compra)) }}</td>
                                                <td>{{ $c->quantidade }}</td>
                                                <td>R$ {{ number_format($c->valor_unitario, 2, ',', '.') }}</td>
                                                <td>{{ $c->corretora }}</td>
                                                <td
                                                    nome="{{ $item->ativo_info->sigla . ' - ' . $item->ativo_info->nome }}"
                                                    logo="{{ $item->ativo_info->logo }}"
                                                    idativo="{{ $item->id_ativo }}"
                                                    saldo="{{ number_format($c->saldo(), 2, ',', '.') }}"
                                                    valor="{{ number_format($c->valor_unitario, 2, ',', '.') }}"
                                                    quantidade="{{ $c->quantidade }}"
                                                    corretora="{{ $c->corretora }}"
                                                    data-compra="{{ $c->data_compra }}">

                                                    <a rota="{{ route('carteira.fundo.compra.update', $c->id) }}"
                                                        onclick="abrirModalEditarCompra(this)" class="pointer"><i class="fas fa-pen"></i></a>

                                                    {{-- <a rota="{{ route('carteira.fundo.compra.destroy', $c->id) }}"
                                                        onclick="abrirModalExcluirCompra(this)" class="pointer"><i class="fas fa-trash"></i></a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="card-header card-header-vendas">
                                <h5 class="card-title mb-0">Vendas deste ativo</h5>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped myDataTable my-0">
                                    <thead>
                                        <tr>
                                            <th>Data da venda</th>
                                            <th>Quantidade</th>
                                            <th>Valor unitário</th>
                                            <th>Corretora</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($item->vendas as $v)
                                            <tr>
                                                <td>{{ date('d/m/Y', strtotime($v->data_venda)) }}</td>
                                                <td>{{ $v->quantidade }}</td>
                                                <td>R$ {{ number_format($v->valor_unitario, 2, ',', '.') }}</td>
                                                <td>{{ $v->corretora }}</td>
                                                <td
                                                    nome="{{ $item->ativo_info->sigla . ' - ' . $item->ativo_info->nome }}"
                                                    logo="{{ $item->ativo_info->logo }}"
                                                    idativo="{{ $item->id_ativo }}"
                                                    saldo="{{ number_format($v->saldo(), 2, ',', '.') }}"
                                                    valor="{{ number_format($v->valor_unitario, 2, ',', '.') }}"
                                                    quantidade="{{ $v->quantidade }}"
                                                    corretora="{{ $v->corretora }}"
                                                    data-venda="{{ $v->data_venda }}">

                                                    <a rota="{{ route('carteira.fundo.venda.update', $v->id) }}"
                                                        onclick="abrirModalEditarVenda(this)" class="pointer"><i class="fas fa-pen"></i></a>

                                                    {{-- <a rota="{{ route('carteira.fundo.venda.destroy', $v->id) }}"
                                                        onclick="abrirModalExcluirVenda(this)" class="pointer"><i class="fas fa-trash"></i></a> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('carteira.investimento-fundo.home-modals')

@endsection

@section('scripts')
    <script src="{{ asset('js/investimento/abrirModal.js') }}"></script>

    <script>
        $('.valor_unitario').mask('000.000.000,00', { reverse: true });

        $(document).ready(function() {

            axios.get(`{{ $consulta_grafico_rendimento }}`)
            .then(function(response) {

                var dataCompras = response.data.dataCompras;
                var valorCompras = response.data.valorCompras;
                var dataVendas = response.data.dataVendas;
                var valorVendas = response.data.valorVendas;

                // Configuração do gráfico de compras
                new Chart("comprasChart", {
                    type: 'line',
                    data: {
                        labels: dataCompras,
                        datasets: [
                            {
                                label: 'Compras',
                                data: valorCompras,
                                borderColor: "#008f1f91",
                                borderWidth: 2,
                                pointBorderWidth: 5,
                                pointBackgroundColor: "#008f1f",
                                pointBorderColor: "#008f1f"
                            }
                        ]
                    },
                    options: {
                        scales: {
                            x: [{
                                type: 'time',
                                time: {
                                    unit: 'day',
                                }
                            }],
                            y: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });

                new Chart("vendasChart", {
                    type: 'line',
                    data: {
                        labels: dataVendas,
                        datasets: [
                            {
                                label: 'Vendas',
                                data: valorVendas,
                                borderColor: "#92000091",
                                borderWidth: 2,
                                pointBorderWidth: 5,
                                pointBackgroundColor: "#920000",
                                pointBorderColor: "#920000"
                            }
                        ]
                    },
                    options: {
                        scales: {
                            x: [{
                                type: 'time',
                                time: {
                                    unit: 'day',
                                }
                            }],
                            y: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });

            })
            .catch(function(error) {
                console.error(error);
            });

            $('.myDataTable').DataTable({
                responsive: true,
                columnDefs: [
                    {
                        responsivePriority: 0,
                        targets: 0
                    },
                    {
                        orderable: false,
                        targets: 1
                    },
                    {
                        orderable: false,
                        targets: 2
                    },
                    {
                        orderable: false,
                        targets: 3
                    },
                    {
                        responsivePriority: 1,
                        orderable: false,
                        targets: 4
                    }
                ],
                order: [
                    [0, "asc"]
                ],
                pageLength: 6,
                lengthChange: false,
                bFilter: false,
                autoWidth: false,
                oLanguage: {
                    // sLengthMenu: "Mostrar _MENU_ registros por página",
                    sZeroRecords: "Nenhum registro encontrado",
                    sInfo: "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
                    sInfoEmpty: "Mostrando 0 / 0 de 0 registros",
                    sInfoFiltered: "(filtrado de _MAX_ registros)",
                    sSearch: "Pesquisar: ",
                    oPaginate: {
                        sFirst: "Início",
                        sPrevious: "Anterior",
                        sNext: "Próximo",
                        sLast: "Último"
                    }
                },
            });

            $('.proventosTable').DataTable({
                responsive: true,
                columnDefs: [
                    {
                        responsivePriority: 0,
                        orderable: false,
                        targets: 0
                    },
                    {
                        orderable: false,
                        targets: 1
                    },
                    {
                        orderable: false,
                        targets: 2
                    },
                    {
                        responsivePriority: 1,
                        orderable: false,
                        targets: 3
                    }
                ],
                info: false,
                order: false,
                pageLength: 6,
                lengthChange: false,
                bFilter: false,
                autoWidth: false,
                oLanguage: {
                    // sLengthMenu: "Mostrar _MENU_ registros por página",
                    sZeroRecords: "Nenhum registro encontrado",
                    sInfo: "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
                    sInfoEmpty: "Mostrando 0 / 0 de 0 registros",
                    sInfoFiltered: "(filtrado de _MAX_ registros)",
                    sSearch: "Pesquisar: ",
                    oPaginate: {
                        sFirst: "Início",
                        sPrevious: "Anterior",
                        sNext: "Próximo",
                        sLast: "Último"
                    }
                },
            });
        })
    </script>
@endsection
