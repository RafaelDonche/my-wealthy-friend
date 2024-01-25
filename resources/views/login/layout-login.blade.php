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
    .error {
        color: red;
    }

    body {
        background-image: url({{ asset('assets/predio.png') }});
        background-size: cover;
        font-family: 'Poppins', sans-serif !important;
    }

    .container-fluid {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<body>

    <div class="container-fluid">
        @yield('content-inicio')
    </div>

</body>

<!-- scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js') }}"></script>

@yield('scripts')

</html>
