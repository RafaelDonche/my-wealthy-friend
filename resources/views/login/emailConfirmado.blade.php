<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wealthy Friend</title>
    <link rel="shortcut icon" type="ico" href="{{ asset('assets/bull-fundo-branco-redondo16x16.ico') }}">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- estilos geral -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>


<style>
    .navbar {
        background: hsla(231, 100%, 63%, 1) !important;

        background: linear-gradient(90deg, hsla(231, 100%, 63%, 1) 16%, hsla(252, 63%, 49%, 1) 100%) !important;

        background: -moz-linear-gradient(90deg, hsla(231, 100%, 63%, 1) 16%, hsla(252, 63%, 49%, 1) 100%) !important;

        background: -webkit-linear-gradient(90deg, hsla(231, 100%, 63%, 1) 16%, hsla(252, 63%, 49%, 1) 100%) !important;

        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#435FFF", endColorstr="#4E2FCC", GradientType=1) !important;
    }
    .btn-primary {
        color: hsla(231, 100%, 63%, 1) !important;
    }
</style>

<body>
    <div class="main d-flex justify-content-center w-100">
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">
                <a class="sidebar-brand" href="{{ route('login') }}">
                    <div class="max-width">
                        <div class="imageContainer">
                            <img src="{{ asset('assets/logo-fundo-branco-300x300.png') }}" class="img-thumbnail"
                                width="80px" height="60px" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </nav>

        <main class="content d-flex p-0">
            <div class="container d-flex flex-column">
                <div class="row h-100">
                    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                        <div class="d-table-cell align-middle">
                            <div class="card p-3">
                                <div class="card-body text-center">
                                    <h1 class="h2">Confirmação de e-mail com sucesso</h1>

                                    {{-- <h2 id="timer"></h2>

                                        @if (session())
                                            <script>
                                                setTimeout(function() {
                                                    window.location = "/" //retorna para página de login
                                                }, 10000); // 10000 = 10 s
                                            </script>
                                        @endif --}}

                                    <div class="mt-2">
                                        <a href="{{ route('login') }}" class="btn btn-lg btn-primary"
                                            style="width: 80%">Voltar ao início</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-12 text-right">
                        <p class="mb-0">
                            © <?php echo date('Y'); ?> - <a href="{{ route('login') }}" target="_blank" class="text-muted">My
                                Wealthy Friend</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    {{-- Scripts --}}
    {{-- <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/timer.js') }}"></script> --}}

</body>

</html>
