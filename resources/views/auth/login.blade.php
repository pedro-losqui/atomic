<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Atomic | SS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet"
        type="text/css" />
</head>

<body class="bg-pattern">
    <div class="bg-overlay"></div>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="">
                                <div class="text-center mb-2">
                                    <a href="#" class="">
                                        <img src="assets/images/logo-dark.png" alt="" height="24"
                                            class="auth-logo logo-dark mx-auto">
                                        <img src="assets/images/logo-light.png" alt="" height="24"
                                            class="auth-logo logo-light mx-auto">
                                    </a>
                                </div>
                                <h4 class="font-size-18 text-muted mt-2 text-center">Bem vindo de volta!</h4>
                                <p class="mb-5 text-center">Faça login para acessar o sistema.</p>
                                <form class="form-horizontal" action="{{ route('auth') }}"
                                    method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            @error('alert')
                                                <div class="alert alert-danger alert-dismissible fade show mb-0"
                                                    role="alert">
                                                    <strong>Ops!</strong> {{ $message }}
                                                </div>
                                                <br>
                                            @enderror
                                            <div class="mb-4">
                                                <label class="form-label" for="username">Login</label>
                                                <input type="text" name="login"
                                                    class="form-control @error('login') is-invalid @enderror"
                                                    value="{{ old('login') }}"
                                                    placeholder="Digite seu login">
                                                @error('login')
                                                    <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="userpassword">Senha</label>
                                                <input type="password" name="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    placeholder="********">
                                                @error('password')
                                                    <span class="badge badge-soft-danger mt-2">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="d-grid mt-4">
                                                <button class="btn btn-primary waves-effect waves-light"
                                                    type="submit">Log In</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p class="text-white-50">{{ date("Y") }} © Atomic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
