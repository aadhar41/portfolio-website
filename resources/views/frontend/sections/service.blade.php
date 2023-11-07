<section class="service-area section-padding-top" id="about-page">
    <div class="container">
        <div class="row">
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
        </div>
    </div>
</section>