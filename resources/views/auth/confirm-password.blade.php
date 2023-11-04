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
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <style>
        .css-form-error {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body class="hold-transition lockscreen">

    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="mb-4 text-sm text-center text-gray-600 dark:text-gray-400">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>
        <div class="lockscreen-logo">
            <a href="javascript:void(0);"><img src="{{asset('dist/img/logo_transparent.png')}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="Logo" height="120" width="120"></a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">John Doe</div>

        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Image">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->
            <form method="POST" action="{{ route('password.confirm') }}" class="lockscreen-credentials">
                @csrf
                <div class="input-group">
                    <x-text-input id="password" class="form-control" placeholder="{{__('Password')}}" type="password" name="password" required autocomplete="current-password" />
                    <div class="input-group-append">
                        <button type="submit" class="btn">
                            <i class="fas fa-arrow-right text-muted"></i>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-2 css-form-error" />
                </div>
            </form>
            <!-- /.lockscreen credentials -->

        </div>
        <!-- /.lockscreen-item -->
        <div class="help-block text-center">
            {{__('Enter your password to retrieve your session')}}
        </div>
        <div class="text-center">
            <a href="{{ route('login') }}" class="text-center font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{__('Or sign in as a different user')}}</a>
        </div>
        <div class="lockscreen-footer text-center mt-3">
            Copyright &copy; 2014-2021 <b><a href="javascript:void(0);" class="text-black">{{ config('app.url', 'http://portfolio-website.test') }}</a></b><br>
            All rights reserved
        </div>
    </div>
    <!-- /.center -->

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>