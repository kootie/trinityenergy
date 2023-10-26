<div>
    <!-- Start of breadcrumb section
 ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section position-relative"
        data-background="front-assets/img/about/About-Us-Right-Side.png">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="breadcrumb-content headline">
                <h2 class="breadcrumb-title">Our Commitment</h2>
                <div class="breadcrumb_item ul-li">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item active">Our Commitment</li>
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
                                <h2>Commitment to Sustainable business practices</h2>
                            </div>
                            <!-- title -->
                            <div class="about-content pera-content">
                                <div class="about-text1 text-justify">
                                    <p>
                                    As an ISO 9001:205 certified company, we are not only committed to world-class standards in energy, but also to principles of sustainability and accountability to all our stakeholders. We believe that a vibrant and well-governed private sector will drive sustainable growth across Africa.
Our commitment to sustainable business practices has driven us to reinvest in all markets in which we are present—developing infrastructure and strengthening vendor and supply chain relationships. We believe that business ethics are a core enabler of sustainable development. We are continuously working to build a meaningful pathway towards a more prosperous, sustainable, and equitable future for Africa through our business.

                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-img clearfix">
                            <div class="abt-img-set" data-tilt data-tilt-max="10">
                                <img src="{{ asset('front-assets/img/about/About-Us-Right-Side-2.png') }}"
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
