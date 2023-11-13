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
                    <a class="nav-link <?php if(request()->route()->named('frontend.home')) { echo 'active'; } ?>" aria-current="page" href="{{route('frontend.home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">About</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link <?php if(request()->route()->named('frontend.portfolio')) { echo 'active'; } ?>" href="javascript:void(0);">Portfolio <i class="fas fa-angle-down"></i></a>
                    <ul class="sub_menu">
                        <li><a href="{{route('frontend.portfolio')}}">Portfolio Grid</a></li>
                    </ul>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if(request()->route()->named('frontend.blogs')) { echo 'active'; } ?>" aria-current="page" href="{{route('frontend.blogs')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>