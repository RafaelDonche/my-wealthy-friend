<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Wealthy Friend</title>
    <link rel="shortcut icon" type="svg" href="{{ asset('image/layer-group-solid.svg') }}" style="color: #4a88eb">

    {{-- Styles --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">
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

                            <div class="card">
                                <div class="card-body">
                                    <div class="m-sm-4">
                                        <h1 class="text-center">
                                            Este link está expirado! <br>
                                            <a href="{{ route('login') }}" class="btn btn-lg btn-primary mt-3"
                                                style="width: 80%">Voltar ao início</a>
                                        </h1>
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

</body>

</html>
