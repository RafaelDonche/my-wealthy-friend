@extends('layout-main')

@section('content')
    <style>
        .img-top {
            box-shadow: 0px 10px 10px 4px rgba(0, 0, 0, 0.1);
            width: 5rem;
            height: 5rem;
        }

        @media (min-width: 1100px) {
            .img-top {
                width: 7rem;
                height: 7rem;
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

        .float-end {
            float: right;
        }

        .title-rendimentos {
            font-size: 20px;
            /* font-weight: bold; */
        }

        .my-card-header {
            padding: 1.25rem 1.25rem 0 1.25rem;
        }

        .my-card-header .card-title {
            font-size: 1rem;
        }
    </style>

    <div class="container-fluid">
        <div class="row p-3">
            <div class="col-md-3 p-3">
                <div class="text-center mb-3">
                    <img class="img-top" src="{{ $item->ativo_info->logo }}" alt="Logo">
                    <div class="w-100 mt-3">
                        <p class="sigla my-1">{{ $item->ativo_info->sigla }}</p>
                        <p class="texto-logo my-1 text-left">Data de cadastro:
                            {{ date('d/m/Y', strtotime($item->created_at)) }}</p>
                        <p class="texto-logo my-1 text-left">Saldo do ativo:
                            R$ {{ number_format($item->valorAtual(), 2, ',', '.') }}</p>
                        <p class="texto-logo my-1 text-left">Quantidade: {{ $item->quantidadeAtual() }}</p>
                    </div>
                </div>
                <div class="card card-empresa p-2">
                    <div class="card-header-empresa">
                        <p class="sigla mb-2 text-center">{{ $item->ativo_info->nome }}</p>
                        <p class="texto-empresa mb-2 text-left">Setor: {{ $item->ativo_info->segmento->nome }}</p>
                        <p class="texto-empresa mb-2 text-left" id="website_empresa"></p>
                        <p class="texto-empresa mb-2 text-left" id="cidade_empresa"></p>
                    </div>
                    <div class="card-body card-body-empresa"></div>
                </div>
            </div>
            <div class="col-md-9 p-3">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="float-end div-btns"
                            nome="{{ $item->ativo_info->sigla.' - '.$item->ativo_info->nome }}"
                            saldo="{{ number_format($item->valorAtual(), 2, ',', '.') }}"
                            logo="{{ $item->ativo_info->logo }}"
                            quantidade="{{ $item->quantidadeAtual() }}"
                            idativo="{{ $item->id_ativo }}"
                            type-quantidade="number">

                            <a class="btn btn-sm btn-action my-1"
                                rota="{{ route('carteira.acao.compra.store') }}" onclick="abrirModalComprar(this)">Comprar</a>
                            <a class="btn btn-sm btn-action my-1"
                                rota="{{ route('carteira.acao.venda.store') }}" onclick="abrirModalVender(this)">Vender</a>
                            <a class="btn m-1" rota="{{ route('carteira.acao.destroy', $item->id) }}" onclick="abrirModalExcluir(this)">
                                <i class="fas fa-trash fa-lg"></i>
                            </a>
                        </div>
                        <span class="title-rendimentos align-end">Seus rendimentos</span>
                    </div>
                    <div class="col-md-12 mt-1">
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="my-card-header">
                                <h5 class="card-title mb-0">Vendas deste ativo</h5>
                            </div>
                            <div class="card-body">
                                <table id="vendas-table" class="table table-striped my-0 dataTable no-footer">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th class="d-none d-xl-table-cell">Start Date</th>
                                            <th class="d-none d-xl-table-cell">End Date</th>
                                            <th>Status</th>
                                            <th class="d-none d-xl-table-cell">Assignee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Project Apollo</td>
                                            <td class="d-none d-xl-table-cell">01/01/2022</td>
                                            <td class="d-none d-xl-table-cell">31/06/2022</td>
                                            <td><span class="badge bg-success">Done</span></td>
                                            <td class="d-none d-xl-table-cell">Carl Jenkins</td>
                                        </tr>
                                        <tr>
                                            <td>Project Fireball</td>
                                            <td class="d-none d-xl-table-cell">01/01/2022</td>
                                            <td class="d-none d-xl-table-cell">31/06/2022</td>
                                            <td><span class="badge bg-danger">Cancelled</span></td>
                                            <td class="d-none d-xl-table-cell">Bertha Martin</td>
                                        </tr>
                                        <tr>
                                            <td>Project Hades</td>
                                            <td class="d-none d-xl-table-cell">01/01/2022</td>
                                            <td class="d-none d-xl-table-cell">31/06/2022</td>
                                            <td><span class="badge bg-success">Done</span></td>
                                            <td class="d-none d-xl-table-cell">Stacie Hall</td>
                                        </tr>
                                        <tr>
                                            <td>Project Nitro</td>
                                            <td class="d-none d-xl-table-cell">01/01/2022</td>
                                            <td class="d-none d-xl-table-cell">31/06/2022</td>
                                            <td><span class="badge bg-warning">In progress</span></td>
                                            <td class="d-none d-xl-table-cell">Carl Jenkins</td>
                                        </tr>
                                        <tr>
                                            <td>Project Phoenix</td>
                                            <td class="d-none d-xl-table-cell">01/01/2022</td>
                                            <td class="d-none d-xl-table-cell">31/06/2022</td>
                                            <td><span class="badge bg-success">Done</span></td>
                                            <td class="d-none d-xl-table-cell">Bertha Martin</td>
                                        </tr>
                                        <tr>
                                            <td>Project Romeo</td>
                                            <td class="d-none d-xl-table-cell">01/01/2022</td>
                                            <td class="d-none d-xl-table-cell">31/06/2022</td>
                                            <td><span class="badge bg-success">Done</span></td>
                                            <td class="d-none d-xl-table-cell">Ashley Briggs</td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <script src="{{ asset('js/home/abrirModal.js') }}"></script>

    <script>
        $(document).ready(function() {

            // axios.get(`{{ $consulta_empresa }}`)
            // .then(function (response) {

            //     var summaryProfile = response.data.results[0].summaryProfile;

            //     $("#website_empresa").html("Website: " + summaryProfile.website);
            //     $("#cidade_empresa").html(summaryProfile.country + " - " + summaryProfile.city + "/" + summaryProfile.state);
            //     $(".card-body-empresa").html(summaryProfile.longBusinessSummary);

            // })
            // .catch(function (error) {
            //     console.error(error);
            // });

            axios.get(`{{ $consulta_grafico_rendimento }}`)
            .then(function (response) {

                console.log(response.data);

            })
            .catch(function (error) {
                console.error(error);
            });

            const xValues = ["janeiro", "fevereiro", "março", "abril"];

            new Chart("myChart", {
                // type: "line",
                // data: {
                //     labels: xValues,
                //     datasets: [{
                //         data: [860, 1140, 1060, 1060],
                //         borderColor: "red",
                //         fill: false
                //     }, {
                //         data: [1600, 1700, 1700, 1900],
                //         borderColor: "green",
                //         fill: false
                //     }, {
                //         data: [300, 700, 2000, 5000],
                //         borderColor: "blue",
                //         fill: false
                //     }]
                // },
                // options: {
                //     legend: {
                //         display: false
                //     }
                // }
                type: 'line',
                data: {
                    datasets: [{
                        label: 'First dataset',
                        data: [0, 20, 40, 50]
                    }],
                    labels: ['January', 'February', 'March', 'April']
                },
                options: {
                    scales: {
                        y: {
                            suggestedMin: 50,
                            suggestedMax: 100
                        }
                    },

                    legend: {
                        display: false
                    }
                }
            });

            $('#vendas-table').DataTable({
                columnDefs: [{
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
        })
    </script>
@endsection
