<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Wealthy Friend</title>

        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- estilos geral -->
        <link rel="stylesheet" href="{{ asset('bootstrap4/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="{{ asset('select2-4.1.0/dist/css/select2.min.css') }}" rel="stylesheet" />

        <style>
            body {
                font-family: 'Poppins', sans-serif !important;
                width: 100% !important;
                height: 100vh !important;
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
            }
        </style>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand text-center" href="{{ route('home') }}">
                <img src="{{ asset('assets/name-fundo-transparente-300x40.png') }}"  alt="Logo" width="80%" height="80%">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Carteira</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FII's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Criptos</a>
                    </li>
                </ul>
                {{-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> --}}
            </div>
        </nav>


        <main class="content">
            @yield('content')
        </main>

    </body>

    <!-- scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap4/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="{{ asset('select2-4.1.0/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('js/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js') }}"></script>

    @yield('scripts')

</html>
