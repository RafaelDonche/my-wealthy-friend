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

        .btn-editar {
            border-radius: 20px;
            color: white !important;
        }

        .float-end {
            float: right;
        }

        .title-rendimentos {
            font-size: 20px;
            /* font-weight: bold; */
        }
    </style>

    <div class="container-fluid">
        <div class="row p-3">
            <div class="col-md-3 p-3">
                <div class="text-center mb-3">
                    <img class="img-top" src="{{ $item->ativo_info->logo }}" alt="Logo">
                    <div class="w-100 mt-3">
                        <p class="sigla my-1">{{ $item->ativo_info->sigla }}</p>
                        <p class="texto-logo my-1 text-left">Corretora: {{ $item->corretora }}</p>
                        <p class="texto-logo my-1 text-left">Data da compra:
                            {{ date('d/m/Y', strtotime($item->data_compra)) }}</p>
                        <p class="texto-logo my-1 text-left">Valor unitário:
                            {{ number_format($item->valor_unitario, 2, ',', '.') }}</p>
                        <p class="texto-logo my-1 text-left">Quantidade: {{ $item->quantidade }}</p>
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
                        <div class="float-end">
                            <a class="btn btn-primary btn-sm btn-editar m-1">Vender</a>
                            <a class="m-1">
                                <i class="fas fa-pen fa-lg"></i>
                            </a>
                            <a class="m-1">
                                <i class="fas fa-trash fa-lg"></i>
                            </a>
                        </div>
                        <span class="title-rendimentos align-end">Seus rendimentos</span>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
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
@endsection

@section('scripts')
    <script>
        // axios.get(`{{ $rota_consulta }}`)
        // .then(function (response) {

        //     var result = response.data.results[0].summaryProfile;console.log(result);

        //     $("#website_empresa").html("Website: " + result.website);
        //     $("#cidade_empresa").html(result.country + " - " + result.city + "/" + result.state);
        //     $(".card-body-empresa").html(result.longBusinessSummary);

        // })
        // .catch(function (error) {
        //     console.error(error);
        // });

        $(document).ready(function() {
            $('#vendas-table').DataTable({
                columnDefs: [
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
                        orderable: false,
                        targets: 4
                    }
                ],
                order: [[0, "asc"]],
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
