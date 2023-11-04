<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Portfolio') }}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('dist/img/favicon.png')}}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css');}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css');}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css');}}">
    <style>
        .css-form-error {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><img src="{{asset('dist/img/logo_transparent.png')}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="Logo" height="120" width="120"></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="{{__('Email')}}" required autofocus autocomplete="username" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="text-danger mt-2 css-form-error" />
                    </div>
                    <div class="input-group mb-3">
                        <x-text-input id="password" class="form-control" type="password" name="password" placeholder="{{__('Password')}}" required autocomplete="current-password" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="text-danger mt-2 css-form-error" />
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <div class="custom-control custom-checkbox">
                                    <input name="remember" id="remember_me" type="checkbox" class="custom-control-input custom-control-input-primary" id="remember_me" checked="">
                                    <label for="remember_me" class="custom-control-label">{{ __('Remember me') }}</label>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Log in') }}</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <hr />

                <!-- 
                <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div> 
                -->
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
                </p>
                <p class="mb-0">
                    <a href="{{ route('register') }}" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Register</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>

    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>