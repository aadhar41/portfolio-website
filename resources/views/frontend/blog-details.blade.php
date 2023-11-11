@extends('frontend.layout')

@section('content')

<header class="site-header parallax-bg">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-8">
                <h2 class="title">Blog Details</h2>
            </div>
            <div class="col-sm-4">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio-Area-Start -->
<section class="blog-details section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="head-title">{!! $blog->title !!}</h2>
                <div class="blog-meta">
                    <div class="single-meta">
                        <div class="meta-title">Published</div>
                        <h4 class="meta-value"><a href="javascript:void(0);">{{ Carbon\Carbon::parse($blog->created_at)->format('M j, Y'); }}</a></h4>
                    </div>
                    <div class="single-meta">
                        <div class="meta-title">Tag</div>
                        <h4 class="meta-value"><a href="javascript:void(0);">{!! $blog->getCategory->name !!}</a></h4>
                    </div>
                </div>
                <figure class="image-block">
                    <img src="{{asset($blog->image)}}" class="img-fix" alt="Img">
                </figure>
                <div class="description">
                    {!! $blog->description !!}
                </div>
                <div class="single-navigation">
                    @if (!empty($previousPost->id))
                    <a href="{{route('frontend.show.blog', $previousPost->id)}}" class="nav-link"><span class="icon"><i class="fal fa-angle-left"></i></span><span class="text">{!! $previousPost->title !!}</span></a>
                    @else
                    <a href="javascript:void(0);" class="nav-link"><span class="text"></span></a>
                    @endif
                    
                    @if (!empty($nextPost->id))
                    <a href="{{route('frontend.show.blog', $nextPost->id)}}" class="nav-link"><span class="text">{!! $nextPost->title !!}</span><span class="icon"><i class="fal fa-angle-right"></i></span></a>
                    @else
                    <a href="javascript:void(0);" class="nav-link"><span class="text"></span></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-Area-End -->

<!-- Quote-Area-Start -->
<section class="quote-area section-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="quote-box">
                    <div class="row ">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="quote-content">
                                <h3 class="title">Your Journey Today</h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate rem
                                        maiores, neque at officiis laudantium.</p>
                                </div>
                                <a href="#" class="button-orange mouse-dir">Get Started <span
                                        class="dir-part"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Quote-Area-End -->

@endsection
