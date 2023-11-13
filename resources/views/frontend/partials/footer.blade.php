@php
    $footerInfo = \App\Models\FooterInfo::first();
    $footerSocialLink = \App\Models\FooterSocialLink::all();
    $footerHelpLink = \App\Models\FooterHelpLink::all();
    $footerUsefulLink = \App\Models\FooterUsefulLink::all();
    $footerContactInfo = \App\Models\FooterContactInfo::first();
    $generalSetting = \App\Models\GeneralSetting::first();
@endphp

<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets">
            <div class="col-md-12 col-lg-3 widget">
                <div class="text-box">
                    <figure class="footer-logo">
                        @if (!empty($generalSetting->footer_logo))
                            <img src="{{asset($generalSetting->footer_logo)}}" alt="Logo">
                        @else
                            <img src="{{asset('frontend/images/theme/logo_transparent_two.png')}}" alt="Logo">
                        @endif
                    </figure>
                    <p>
                        @if ($footerInfo->info)
                            {!! $footerInfo->info !!}
                        @endif 
                    </p>
                    <ul class="d-flex flex-wrap">
                        @if ($footerSocialLink)
                            @foreach ($footerSocialLink as $link)                                
                            <li><a href="{!! $link->url !!}"><i class="{!! $link->icon !!}"></i></a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-1 widget">
                <h3 class="widget-title">Useful Link</h3>
                <ul class="nav-menu">
                    @if ($footerUsefulLink)
                        @foreach ($footerUsefulLink as $usefulLink)
                            <li><a href="{!! $usefulLink->url !!}">{!! $usefulLink->name !!}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Contact Info</h3>
                <ul>
                    <li>
                        @if ($footerContactInfo->address)
                            {!! $footerContactInfo->address !!}
                        @endif
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            @if ($footerContactInfo->phone)
                                {!! $footerContactInfo->phone !!}
                            @endif    
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            @if ($footerContactInfo->email)
                                {!! $footerContactInfo->email !!}
                            @endif     
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Help</h3>
                <ul class="nav-menu">
                    @if ($footerHelpLink)
                        @foreach ($footerHelpLink as $helplink)
                        <li><a href="{!! $helplink->url !!}">{!! $helplink->name !!}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>{!! $footerInfo->copy_right !!}</p>
                        <p>{!! $footerInfo->powered_by !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
