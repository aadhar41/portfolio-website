<section class="service-area section-padding-top" id="service-page">
    <div class="container">
        <div class="row">
            @if ($services)
                @foreach ($services as $name => $description)
                <div class="col-lg-4 mt-1">
                    <div class="single-service">
                        <h3 class="title wow fadeInRight" data-wow-delay="0.3s">{{$name}}</h3>
                        <div class="desc wow fadeInRight" data-wow-delay="0.4s">
                            <p>{{$description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-lg-4">
                    <div class="single-service">
                        <h3 class="title wow fadeInRight" data-wow-delay="0.3s">Branding Design</h3>
                        <div class="desc wow fadeInRight" data-wow-delay="0.4s">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quos animi numquam
                                excepturi eveniet explicabo repellendus rem esse. Quae quasi odio enim.</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>