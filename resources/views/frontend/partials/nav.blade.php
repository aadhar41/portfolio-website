@php
    $generalSetting = \App\Models\GeneralSetting::first();
@endphp
<nav class="navbar navbar-expand-lg main_menu" id="main_menu_area">
    <div class="container">
        <a class="navbar-brand" href="javascript:void(0);">
            @if (!empty($generalSetting->logo))
            <img src="{{asset($generalSetting->logo)}}" class="main-logo-one" alt="Logo" style="display: none;">
            @else
            <img src="{{asset('frontend/images/theme/logo_transparent.png')}}" class="main-logo-one" alt="Logo" style="display: none;">
            @endif
            
            @if (!empty($generalSetting->footer_logo))
                <img src="{{asset($generalSetting->footer_logo)}}" class="main-logo-two" alt="Logo">
            @else
                <img src="{{asset('frontend/images/theme/logo_transparent_two.png')}}" class="main-logo-two" alt="Logo">
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="far fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ (Route::currentRouteName() == 'frontend.home') ? 'active' : '' }}" aria-current="page" href="{{ (Route::currentRouteName() == 'frontend.home') ? '#home-page' : route('frontend.home') }}">Home</a>
                </li>
                @if (Route::currentRouteName() == 'frontend.home')
                    <li class="nav-item">
                        <a class="nav-link" href="#about-page">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills-page">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service-page">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-page">Contact</a>
                    </li>
                @endif
                
                <li class="nav-item">
                    <a class="nav-link {{ (Route::currentRouteName() == 'frontend.blogs') ? 'active' : '' }}" aria-current="page" href="{{ (Route::currentRouteName() == 'frontend.blogs') ? 'javascript:void(0);' : route('frontend.blogs') }}">Blog</a>
                </li>
                
                {{-- <li class="nav-item">
                    <a class="nav-link {{ (Route::currentRouteName() == 'frontend.portfolio') ? 'active' : '' }}" href="javascript:void(0);">Portfolio <i class="fas fa-angle-down"></i></a>
                    <ul class="sub_menu">
                        <li><a href="{{route('frontend.portfolio')}}">Portfolio Grid</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>