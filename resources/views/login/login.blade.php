@extends('login.layout-login')

@section('content-inicio')
    <style>
        .card {
            width: 400px;
            border: none !important;
            box-shadow: 0 .5rem .5rem rgba(0, 0, 0, .05) !important;
            margin: 0.5rem 0;
        }

        .btn-primary {
            background-color: #1A194A !important;
            border-color: #1A194A !important;
            /* width: 50px; */
        }

        .second-link {
            text-decoration: none !important;
            color: black !important;
        }

        .card-footer {
            font-size: 20px;
            background-color: #3b3b3b !important;
            text-decoration: none !important;
            color: white !important;
        }
    </style>

    <div class="card">
        <div class="card-body">
            <img src="{{ asset('assets/my-wealthy-friend.png') }}" class="card-img-top" alt="Logo">
            <form action="{{ route('login.autenticacao') }}" method="post">
                @csrf

                @include('errors.alerts')
                @include('errors.errors')

                <div class="col-12 mb-3">
                    <input class="form-control form-control-lg" type="text" name="email" id="email"
                        placeholder="e-mail" value="{{ old('email') }}">
                </div>
                <div class="col-12 mb-3">
                    <input class="form-control form-control-lg" type="password" name="password" id="password"
                        placeholder="senha">
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg mb-2">Acessar</button><br>
                    <a href="{{ route('passwordReset1') }}" class="second-link">Esqueci minha senha</a><br>
                    <a href="{{ route('reenviar_link') }}" class="second-link">Reenviar link de confirmação</a>
                </div>
            </form>
        </div>
        <a href="{{ route('register.index') }}" class="card-footer text-center">
            Cadastre-se
        </a>
    </div>
@endsection
