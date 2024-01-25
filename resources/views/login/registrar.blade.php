@extends('login.layout-login')

@section('content-inicio')
    <style>
        .card {
            /* width: 400px; */
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
            <form action="{{ route('register.store') }}" method="POST" id="form" class="form_prevent_multiple_submits">
                @csrf

                @include('errors.alerts')
                @include('errors.errors')

                <div class="m-sm-4">

                    <p class="cadastro">CADASTRO</p>

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input class="form-control form-control-lg" type="text" name="name" id="name"
                            placeholder="Informe seu nome" value="{{ old('name') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">CPF</label>
                        <input class="form-control form-control-lg" type="text" name="cpf" id="cpf"
                            placeholder="Informe seu CPF" value="{{ old('cpf') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control form-control-lg" type="email" name="email"
                            placeholder="Informe um email válido" value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Senha (mínimo 6 caracteres e máximo 16 caracteres)</label>
                        <input class="form-control form-control-lg" type="password" name="password"
                            placeholder="Informe uma senha" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirme a senha</label>
                        <input class="form-control form-control-lg" type="password" name="confirmacao"
                            placeholder="Confirme a senha" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-lg btn-primary" style="width: 100%">Cadastrar</button>
                    </div>
                    <div class="text-center mt-0">
                        <a href="{{ route('login') }}" class="second-link">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $("#cpf").mask("000.000.000-00");
    </script>
@endsection
