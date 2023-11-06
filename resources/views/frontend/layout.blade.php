@include('frontend.partials.head')

@include('frontend.partials.nav')

<div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary" tabindex="0">

    @yield('content')

    <!-- Footer-Area-Start -->
    @include('frontend.partials.footer')
    <!-- Footer-Area-End -->
</div>

@include('frontend.partials.bottom')