<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets">
            <div class="col-md-12 col-lg-3 widget">
                <div class="text-box">
                    <figure class="footer-logo">
                        <img src="{{asset('frontend/images/theme/logo_transparent_2.png')}}" alt="Logo">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, libero. </p>
                    <ul class="d-flex flex-wrap">
                        <li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="javascript:void(0);"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-1 widget">
                <h3 class="widget-title">Useful Link</h3>
                <ul class="nav-menu">
                    <li><a href="javascript:void(0);">Home</a></li>
                    <li><a href="javascript:void(0);">About</a></li>
                    <li><a href="javascript:void(0);">Portfolio</a></li>
                    <li><a href="javascript:void(0);">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Contact Info</h3>
                <ul>
                    <li>S-1, 108, R.K. Residency, C-Block, 302012, Jaipur, Rajasthan, India.</li>
                    <li><a href="javascript:void(0);">+91-7737138843</a></li>
                    <li><a href="javascript:void(0);">aadhar41@gmail.com</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Help</h3>
                <ul class="nav-menu">
                    <li><a href="javascript:void(0);">Privacy Policy</a></li>
                    <li><a href="javascript:void(0);">404 Page</a></li>
                    <li><a href="javascript:void(0);">Terms</a></li>
                    <li><a href="javascript:void(0);">Documentation</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>Copyright <?= date('Y'); ?> <span>{{ config('app.name', 'Portfolio') }}</span>. All Rights Reserved.</p>
                        <p>Powered by {{ config('app.name', 'Portfolio') }} &nbsp; | &nbsp; <?= date('Y'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
