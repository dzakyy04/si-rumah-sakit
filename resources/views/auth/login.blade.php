<!DOCTYPE html>
<html lang="en" class="js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Page Title  -->
    <title>{{ config('app.name') }} | {{ $title }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href=" {{ asset('/assets/css/dashlite.css') }}">
    @stack('css')
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="#" class="logo-link">
                                {{-- <img class="logo-light logo-img logo-img-lg"
                                    src="{{ asset('assets/images/logo-rs.png') }}" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg"
                                    src="{{ asset('assets/images/logo-rs.png') }}" alt="logo-dark"> --}}
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Login</h4>
                                        <div class="nk-block-des">
                                            <p>Silahkan masukkan username dan password anda.</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="username">Username</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text"
                                                class="form-control form-control-lg @error('username') is-invalid @enderror"
                                                id="username" name="username" placeholder="Masukkan username anda"
                                                value="{{ old('username') }}">
                                        </div>
                                        @error('username')
                                            <div class="mt-1 small text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password"
                                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                id="password" name="password" placeholder="Masukkan password anda">
                                        </div>
                                        @error('password')
                                            <div class="mt-1 small text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group d-flex justify-between">
                                        <div class="custom-control custom-control-sm custom-checkbox checked">
                                            <input type="checkbox" class="custom-control-input" id="remember"
                                                name="remember">
                                            <label class="custom-control-label" for="remember">Ingat saya</label>
                                        </div>
                                        <a href="" class="link link-primary link-sm">Lupa
                                            password?</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="btnSubmit" class="btn btn-lg btn-primary btn-block">
                                            <span>Login</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="text-soft">&copy; 2024 Sistem Informasi Rumah Sakit. All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/example-toastr.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#btnSubmit").on("click", function() {
                var $btn = $(this);
                var $form = $btn.closest("form");
                if ($form[0].checkValidity()) {
                    $btn.addClass("disabled");

                    var spinner = $("<span/>", {
                        "class": "spinner-border spinner-border-sm",
                        "role": "status",
                        "aria-hidden": "true"
                    });

                    $btn.prepend(spinner);
                }
            });
        });

        @if (session()->has('success'))
            let successMessage = @json(session('success'));
            NioApp.Toast(`<h5>Berhasil</h5><p>${successMessage}</p>`, 'success', {
                position: 'top-right',
            });
        @endif

        @if (session()->has('error'))
            let errorMessage = @json(session('error'));
            NioApp.Toast(`<h5>Error</h5><p>${errorMessage}</p>`, 'error', {
                position: 'top-right',
            });
        @endif
    </script>

</html>
