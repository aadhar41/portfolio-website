<section class="portfolio-area section-padding-top" id="portfolio-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                @if ($portfolioSectionSettings)
                    <div class="section-title">
                        <h3 class="title">{!! $portfolioSectionSettings->title !!}</h3>
                        <div class="desc">
                            <p>
                                {!! $portfolioSectionSettings->sub_title !!}
                            </p>
                        </div>
                    </div>
                @else
                    <div class="section-title">
                        <h3 class="title">Latest Portfolio</h3>
                        <div class="desc">
                            <p>Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse. Quae quasi
                                odio enim.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <ul class="filter-menu">
                    <li class="active" data-filter="*">All Projects</li>
                    @if ($categories)                        
                        @foreach($categories as $category)
                            <li data-filter=".{{$category->slug}}">{{$category->name}}</li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <div class="portfolio-wrapper">
            <div class="row portfolios">
                @if ($portfolioItems)
                    @foreach ($portfolioItems as $item)
                        <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item {{$item->category->slug}}">
                            <div class="single-portfolio">
                                <figure class="portfolio-image">
                                    <img src="{{$item->image}}" alt="{{$item->title}}">
                                </figure>
                                <div class="portfolio-content">
                                    <a href="{{$item->image}}" data-lity class="icon"><i class="fas fa-plus"></i></a>
                                    <h4 class="title"><a href="{{route('frontend.show.portfolio', $item->id)}}">{{$item->title}}</a></h4>
                                    <div class="desc">
                                        <p>{!! Str::limit(strip_tags($item->description), 100); !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item development">
                        <div class="single-portfolio">
                            <figure class="portfolio-image">
                                <img src="{{asset('images/portfolio-9.jpg')}}" alt="Img">
                            </figure>
                            <div class="portfolio-content">
                                <a href="{{asset('images/portfolio-9.jpg')}}" data-lity class="icon"><i
                                        class="fas fa-plus"></i></a>
                                <h4 class="title"><a href="portfolio-details.html">Branding Design</a></h4>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>