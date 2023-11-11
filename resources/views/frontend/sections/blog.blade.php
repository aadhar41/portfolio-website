<section class="blog-area section-padding-top" id="blog-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{!! $blogSectionSetting->title !!}</h3>
                    <div class="desc">
                        <p>{!! $blogSectionSetting->sub_title !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="blog-slider">
                    @if (!empty($blogs))
                        @foreach ($blogs as $blog)
                            <div class="single-blog">
                                <figure class="blog-image">
                                    <img src="{{asset($blog->image)}}" alt="Img">
                                </figure>
                                <div class="blog-content">
                                    <h3 class="title"><a href="{{route('frontend.show.blog', $blog->id)}}">{!! $blog->title !!}</a></h3>
                                    <div class="desc">
                                        <p>{!! Str::limit($blog->description, 150, '...'); !!}</p>
                                    </div>
                                    <a href="{{route('frontend.show.blog', $blog->id)}}" class="button-primary-trans mouse-dir">Read More <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @else                        
                        <div class="single-blog">
                            <figure class="blog-image">
                                <img src="{{asset('frontend/images/blog-1.jpg')}}" alt="">
                            </figure>
                            <div class="blog-content">
                                <h3 class="title"><a href="javascript:void(0);">Great things never come from.</a></h3>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                        consequuntur provident iusto cumque . </p>
                                </div>
                                <a href="javascript:void(0);" class="button-primary-trans mouse-dir">Read More <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>