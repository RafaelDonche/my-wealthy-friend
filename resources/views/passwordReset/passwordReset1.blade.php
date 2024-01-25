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

        .cadastro {
            text-align: center;
            border-bottom: 0.5px solid black;
            font-weight: bold;
            color: black;
        }

        .second-link {
            text-decoration: none !important;
            color: black !important;
        }

        .m-sm-4 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }
    </style>

    <div class="card">
        <div class="card-header text-center pb-0">
            <img src="{{ asset('assets/logo-fundo-transparente-300x300.png') }}" alt="Logo" width="190px" height="190px">
        </div>
        <div class="card-body pt-0">
            <form action="{{ route('passwordReset2') }}" method="POST" id="form">
                @csrf
                @method('POST')

                @include('errors.alerts')
                @include('errors.errors')

                <div class="m-sm-4">

                    <p class="cadastro">RECUPERAR SENHA</p>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg"
                            placeholder="Digite seu email" value="{{ old('email') }}">
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-lg btn-primary" style="width: 100%">Recuperar</button>
                    </div>
                    <div class="text-center mt-2">
                        <a href="{{ route('login') }}" class="second-link">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
