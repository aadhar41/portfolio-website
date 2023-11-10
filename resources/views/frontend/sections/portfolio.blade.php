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
                @foreach ($portfolioItems as $item)
                    <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item {{$item->category->slug}}">
                        <div class="single-portfolio">
                            <figure class="portfolio-image">
                                <img src="{{$item->image}}" alt="{{$item->title}}">
                            </figure>
                            <div class="portfolio-content">
                                <a href="{{$item->image}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
                                <h4 class="title"><a href="javascript:void(0);">{{$item->title}}</a></h4>
                                <div class="desc">
                                    <p>{!! Str::limit($item->description, 100); !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item interface">
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
                </div>
                <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item branding">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{asset('frontend/images/portfolio-3.jpg')}}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{asset('frontend/images/portfolio-3.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="javascript:void(0);">Ines Campbell</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item interface experience">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{asset('frontend/images/portfolio-4.jpg')}}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{asset('frontend/images/portfolio-4.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="javascript:void(0);">Wendi Michael</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item branding development experience">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{asset('frontend/images/portfolio-5.jpg')}}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{asset('frontend/images/portfolio-5.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="javascript:void(0);">Guerrero Woodard</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item interface">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{asset('frontend/images/portfolio-6.jpg')}}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{asset('frontend/images/portfolio-6.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="javascript:void(0);">Prince Phelps</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item development">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{asset('frontend/images/portfolio-7.jpg')}}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{asset('frontend/images/portfolio-7.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="javascript:void(0);">Gayle Gaines</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item experience">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{asset('frontend/images/portfolio-8.jpg')}}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{asset('frontend/images/portfolio-8.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="javascript:void(0);">Janice Wilder</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item development">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{asset('frontend/images/portfolio-9.jpg')}}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="{{asset('frontend/images/portfolio-9.jpg')}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="javascript:void(0);">Branding Design</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>