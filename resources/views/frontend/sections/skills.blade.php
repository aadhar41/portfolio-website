<section class="skills-area section-padding-top" id="skills-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-12">
                        @if ($skillSection)
                            <div class="section-title">
                                <h3 class="title">{!! $skillSection->title !!}</h3>
                                <div class="desc">
                                    <p>{!! $skillSection->sub_title !!}</p>
                                </div>
                            </div>
                        @else
                            <div class="section-title">
                                <h3 class="title">Skills</h3>
                                <div class="desc">
                                    <p>Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse.
                                        Quae quasi
                                        odio enim.</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row skills">
                    @if ($skills)
                        @foreach ($skills as $skill)
                        <div class="col-sm-6">
                            <div class="bar_group wow fadeInUp" data-wow-delay="0.3s" data-max="100">
                                <div class="title">{!! $skill->name !!}</div>
                                <div class="bar_group__bar thick elastic" data-value="{!! $skill->percent !!}" data-color="{{getColor($loop->index)}}" data-tooltip="true" data-show-values="false" data-unit="%"></div>
                            </div>
                        </div>
                        @endforeach
                    @else
                    <div class="col-sm-6">
                        <div class="bar_group wow fadeInUp" data-wow-delay="0.3s" data-max="100">
                            <div class="title">Web Developement</div>
                            <div class="bar_group__bar thick elastic" data-value="70" data-color="#ff885e"
                                data-tooltip="true" data-show-values="false" data-unit="%"></div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <figure class="single-image text-right wow fadeInRight">
                    <img src="{{asset($skillSection->image)}}" alt="{{$skillSection->title}}">
                </figure>
            </div>
        </div>
    </div>
</section>