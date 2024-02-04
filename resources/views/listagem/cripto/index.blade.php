@extends('layout-main')

@section('content')

    <style>
        .search-input {
            border-style: solid !important;
            border-color: #ced4da !important;
            border-width: 1px !important;
            border-radius: 30px;
            background-color: #ced4da6b;
            color: rgb(24, 24, 24);
        }

        .items {
            padding: 0 1.5rem;
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
            -webkit-box-shadow: inset 0 0 16px rgba(0,0,0,0.8);
        }

        .item {
            justify-content: space-around;
            margin: 1rem 0;
            padding: 0.5rem;
            border-radius: 30px;
            border: 1px solid rgb(146, 146, 146);
        }

        .item-img{
            width: 3rem;
            height: 3rem;
        }

        .item_nome {
            justify-content: center;
            margin: 0;
        }

        .btn-side {
            min-width: 8rem;
            min-height: 2rem;
            border-radius: 30px;
            color: white;
            border: none;
        }

        .btn-green {
            background-color: rgb(61, 151, 61);
        }

        .btn-red {
            background-color: rgb(156, 53, 53);
        }

        .btn-black {
            background-color: rgb(107, 107, 107);
        }

        .btn-grey {
            background-color: rgb(107, 107, 107);
        }

        @media (max-width: 767px) {
            .d-flex {
                margin-bottom: 0.5rem;
            }
        }
    </style>

    @include('errors.alerts')
    @include('errors.errors')

    <div class="conteiner-fluid m-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-center mb-0" style="color: black;">Listagem de criptomoedas</h3>
            </div>
            <div class="card-body">
                <div class="row p-2">
                    <div class="col-md-12 mb-3">
                        <input type="search" class="form-control text-center search-input" id="search-input" placeholder="Buscar...">
                    </div>
                    <div class="col-md-12 items" id="items">
                        @foreach ($items as $i)
                            <div class="col-md-12 row item" nome="{{ $i->sigla . ' - ' . $i->nome }}">
                                <div class="col-md-1 d-flex justify-content-center">
                                    <img class="item-img" src="{{ $i->logo }}" alt="Logo do ativo">
                                </div>
                                <div class="col-md-5 d-flex align-items-center justify-content-center">
                                    <p class="item_nome">{{ $i->sigla . ' - ' . $i->nome }}</p>
                                </div>
                                <div class="col-md-6 d-flex justify-content-around">
                                    <button class="btn-side btn-{{ $i->color_btn() }}"
                                        data-toggle="tooltip" data-placement="top" title="Preço do dia">
                                        R$ {{ number_format($i->ultimo_dia_historico()->valor_fechamento, 2, ',', '.') }}
                                    </button>
                                    <button class="btn-side btn-grey"
                                        data-toggle="tooltip" data-placement="top" title="Variação do dia">
                                        {{ number_format($i->ultimo_dia_historico()->variacao, 2, ',', '.') }}
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();

            $('#search-input').on('input', function () {
                var termoBusca = $(this).val().toLowerCase();

                $('#items .item').each(function () {
                    var nomeItem = $(this).attr('nome').toLowerCase();

                    if (nomeItem.includes(termoBusca)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>

@endsection
