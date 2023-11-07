<header class="header-area parallax-bg" id="home-page" @if($hero->image) style="background: url({{$hero->image}}) no-repeat scroll top center/cover;" @endif>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="header-text">
                    <h3 class="typer-title wow fadeInUp" data-wow-delay="0.2s">I'm developer designer</h3>
                    <h1 class="title wow fadeInUp" data-wow-delay="0.3s">{{$hero->title}}</h1>
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                        <p>{{$hero->sub_title}}</p>
                    </div>
                    @if ($hero->btn_txt)
                    <a href="#" class="button-dark mouse-dir wow fadeInUp" data-wow-delay="0.5s">{{$hero->btn_txt}} <span class="dir-part"></span></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>
<?php 
// print_r($typerTitles);
$titles = []; 
foreach ($typerTitles as $title) {
    $titles[] = $title;
}
$titles = json_encode($titles);
?>
@push('scripts')
    <script>
        
        var textOne = "I'm developer.",
            textTwo = "Let's work together.",
            textThree = "I can create awesome stuff.";

        $('.header-area .typer-title').typer({!! $titles !!});
    </script>
@endpush