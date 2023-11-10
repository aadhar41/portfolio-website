<section class="portfolio-area section-padding-top" id="portfolio-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{!! $portfolioSectionSettings->title !!}</h3>
                    <div class="desc">
                        <p>
                            {!! $portfolioSectionSettings->sub_title !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <ul class="filter-menu">
                    <li class="active" data-filter="*">All Projects</li>
                    @foreach($categories as $category)
                    <li data-filter=".{{$category->slug}}">{{$category->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="portfolio-wrapper">
            <div class="row portfolios">
                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item branding">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{asset('frontend/images/portfolio-1.jpg')}}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{asset('frontend/images/portfolio-1.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="javascript:void(0);">Black Golden</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item interface">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{asset('frontend/images/portfolio-2.jpg')}}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{asset('frontend/images/portfolio-2.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="javascript:void(0);">Fitzgerald Stanton</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>