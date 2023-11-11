        <script src="{{asset('frontend/js/vendor/jquery-min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('frontend/js/contact-form.js')}}"></script>
        <script src="{{asset('frontend/js/jquery-plugin-collection.js')}}"></script>
        <script src="{{asset('frontend/js/vendor/modernizr.js')}}"></script>
        <script src="{{asset('frontend/js/main.js')}}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        @stack('scripts')
        @if (!empty($errors->all()))
            @foreach ($errors->all() as $error)
            <script>
                toastr.error("{{$error}}")
            </script>
            @endforeach
        @endif
    </body>
</html>