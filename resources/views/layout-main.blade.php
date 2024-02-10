<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wealthy Friend</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- estilos geral -->
    <link rel="stylesheet" href="{{ asset('bootstrap4/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('select2-4.1.0/dist/css/select2.min.css') }}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.8/r-2.5.0/datatables.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif !important;
            width: 100% !important;
            height: 100vh !important;
            background-color: rgba(236, 236, 236, 0.37);
        }

        .navbar-nav .nav-link {
            color: rgba(0, 0, 0, 0.747) !important;
            text-align: center;
        }

        .navbar-nav .nav-link.active {
            background-color: #1A194A !important;
            color: white !important;
            border-radius: 20px;
        }

        .navbar-nav .nav-item {
            margin: 0 20px;
            width: 85px;
        }

        .navbar-toggler .fa-bars {
            color: #1A194A !important;
        }

        .btn-user {
            display: block;
            margin: 0 20px;
        }

        .fa-user {
            color: #1A194A !important;
        }
        .fa-user:hover {
            cursor: pointer;
            color: #0f0e47 !important;
        }

        @media (max-width: 991px) {
            .btn-user {
                display: block;
                margin: 0 20px;
                width: 85px;
            }
        }

        .float-end {
            float: right;
        }

        .btn-logout {
            border-radius: 30px;
            color: white !important;
        }

        .modal-header-secondary {
            background-color: rgba(134, 134, 134, 0.425);
        }

        .modal-header-danger {
            background-color: rgba(131, 0, 0, 0.425);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand text-center" href="{{ route('carteira.home') }}">
            <img src="{{ asset('assets/name-fundo-transparente-300x40.png') }}" alt="Logo" width="80%"
                height="80%">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Botão de navegação">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(Route::current()->uri, 'carteira/') ? 'active' : null }}"
                        href="{{ route('carteira.home') }}">Carteira</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(Route::current()->uri, 'listagem/acao/') ? 'active' : null }}"
                        href="{{ route('listagem.acao.index') }}">Ações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(Route::current()->uri, 'listagem/fundo/') ? 'active' : null }}"
                        href="{{ route('listagem.fundo.index') }}">FII's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(Route::current()->uri, 'listagem/cripto/') ? 'active' : null }}"
                        href="{{ route('listagem.cripto.index') }}">Criptos</a>
                </li>
            </ul>
            <a class="text-center btn-user" data-toggle="modal" data-target="#editarUser">
                <i class="fas fa-user fa-lg"></i>
            </a>
            {{-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> --}}
        </div>
    </nav>


    <main class="content">
        <!-- Modal = editarUser -->
        <div class="modal fade" id="editarUser" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header modal-header-secondary">
                        <h5 class="modal-title">Informações de usuário</h5>
                        <form action="{{ route('logout') }}" id="form-logout" method="post">
                            @csrf
                            <button class="btn btn-danger btn-logout" type="submit">
                                Sair
                            </button>
                        </form>
                    </div>
                    <form action="{{ route('user.update') }}" id="form-update-user" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Nome</label>
                                    <input class="form-control" type="text" name="name" id="name"
                                        placeholder="Informe seu nome" value="{{ auth()->user()->name }}" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" type="email" name="email"
                                        placeholder="Informe um email válido" value="{{ auth()->user()->email }}" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">CPF</label>
                                    <input class="form-control" type="text" name="cpf" id="cpf"
                                        placeholder="Informe seu CPF" value="{{ auth()->user()->cpf }}" required>
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
        @yield('content')
    </main>

</body>

<!-- scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="{{ asset('bootstrap4/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/fontawesome.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="{{ asset('select2-4.1.0/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('js/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.8/r-2.5.0/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        $("#cpf").mask("000.000.000-00");

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
        $('.select-multiple').select2({
            language: {
                noResults: function() {
                    return "Nenhum resultado encontrado";
                }
            },
            placeholder: "selecione",
            closeOnSelect: false,
            width: '100%',
        });
    })
</script>

@yield('scripts')

</html>
