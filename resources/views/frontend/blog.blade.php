@extends('frontend.layout')

@section('content')

<header class="site-header parallax-bg">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-7">
                <h2 class="title">Blog</h2>
            </div>
            <div class="col-sm-5">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="javascript:void(0);">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio-Area-Start -->
<section class="blog-area section-padding">
    <div class="container">
        <div class="row">
            @if (!empty($blogs))
                @foreach ($blogs as $item)
                <div class="col-xl-4 col-md-6">
                    <div class="single-blog">
                        <figure class="blog-image">
                            <img src="{{asset($item->image)}}" alt="Img">
                        </figure>
                        <div class="blog-content">
                            <h3 class="title"><a href="{{route('frontend.show.blog', $item->id)}}">{!! $item->title !!}</a></h3>
                            <div class="desc">
                                <p>{!! Str::limit($item->description, 150, '...') !!}</p>
                            </div>
                            <a href="{{route('frontend.show.blog', $item->id)}}" class="button-primary-trans mouse-dir">Read More <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-xl-4 col-md-6">
                    <div class="single-blog">
                        <figure class="blog-image">
                            <img src="{{asset('frontend/images/blog-1.jpg')}}" alt="Img">
                        </figure>
                        <div class="blog-content">
                            <h3 class="title"><a href="blog-details.html">Great things never come from.</a></h3>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                    consequuntur provident iusto cumque . </p>
                            </div>
                            <a href="javascript:void(0);" class="button-primary-trans mouse-dir">Read More <span
                                    class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <nav class="navigation pagination">
                    <div class="nav-links d-flex justify-content-center">
                        {{$blogs->links()}}
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-Area-End -->

<!-- Quote-Area-Start -->
{{-- <section class="quote-area section-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="quote-box">

                    <div class="row ">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="quote-content">
                                <h3 class="title">Start Journey Today</h3>
                                <div class="desc">
                                    <p>Earum quos animi numquam excepturi eveniet explicabo repellendus rem
                                        esse.
                                        Quae quasi
                                        odio enim.</p>
                                </div>
                                <a href="javascript:void(0);" class="button-orange mouse-dir">Get Started <span
                                        class="dir-part"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Quote-Area-End -->

@endsection
