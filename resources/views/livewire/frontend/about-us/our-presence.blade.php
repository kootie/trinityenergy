<div>
    <!-- Start of breadcrumb section
 ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section position-relative"
        data-background="front-assets/img/about/About-Us-Right-Side.png">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="breadcrumb-content headline">
                <h2 class="breadcrumb-title"> Our Presence</h2>
                <div class="breadcrumb_item ul-li">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item active">Our Presence</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
 ============================================= -->

    <!-- Start of about section
 ============================================= -->
    <section id="about" class="about-section about-page-about">
        <div class="container">
            <div class="about-content">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-text">
                            <div class="section-title-left">
                                <span class="title-tag"><img src="assets/icon/icon5.svg" alt="">Who We
                                    Are</span>
                                <h2>Our Presence</h2>
                            </div>
                            <!-- title -->
                            <div class="about-content pera-content">
                                <div class="about-text1 text-justify">
                                    <p>
                                    Our strong presence in Kenya, DRC, South Sudan, Ethiopia, and the United Arab Emirates, we have established ourselves as a pan-African energy company. Additionally, our global presence allows us to tailor personalized solutions for our clients, ensuring we meet their unique requirements wherever they are. No matter the location, we strive to guarantee customer satisfaction and exceed our expectations.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-img clearfix" style="height: 100px !important">
                            <div class="abt-img-set" data-tilt data-tilt-max="10">
                                <img src="{{ asset('front-assets/img/work-with-us/TEL-Footprint.jpeg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<!-- End of about section
 ============================================= -->




</div>

@push('scripts')
    <script>
        window.onload = function() {
            $('.team').slick({
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev"></button>',
                nextArrow: '<button type="button" class="slick-next"></button>',
                centerMode: true,
                slidesToShow: 3,
                slidesToScroll: 1
            });
        };
    </script>
@endpush
