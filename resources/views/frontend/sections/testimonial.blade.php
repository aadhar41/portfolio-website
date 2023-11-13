<section class="testimonial-area">
    <div class="container">
        <div class="row">
            @if ($feedbackSetting)                
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{!! @$feedbackSetting->title !!}</h3>
                    <div class="desc">
                        <p>{!! @$feedbackSetting->sub_title !!}</p>
                    </div>
                </div>
            </div>
            @else
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">Our client Feedback</h3>
                    <div class="desc">
                        <p>Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse.
                            Quae quasi
                            odio enim.</p>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="testimonial-slider">
                    @if (!empty($feedbacks))
                        @foreach ($feedbacks as $feedback)
                        <div class="single-testimonial">
                            <div class="testimonial-header">
                                <div class="quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <h5 class="title">{!! @$feedback->title !!}</h5>
                                <h6 class="position">{!! @$feedback->position !!}</h6>
                            </div>
                            <div class="content">
                                <p>{!! @$feedback->description !!}</p>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="single-testimonial">
                            <div class="testimonial-header">
                                <div class="quote">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <h5 class="title">Reilly Harding</h5>
                                <h6 class="position">Managing Director, DevignEdge</h6>
                            </div>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus consequuntur
                                    provident iusto cumque nulla laboriosam quos ipsam enim eum! Itaque ipsum nam
                                    ratione eius porro excepturi.</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>