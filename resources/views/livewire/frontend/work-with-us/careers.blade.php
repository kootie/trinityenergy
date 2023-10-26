<div>
    <!-- Start of breadcrumb section
 ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section position-relative"
        data-background="front-assets/img/work-with-us/Work-with-us.png">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="breadcrumb-content headline">
                <h2 class="breadcrumb-title">Careers</h2>
                <div class="breadcrumb_item ul-li">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item active">Careers/li>
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
                                <span class="title-tag"><img src="assets/icon/icon5.svg" alt="">Careers</span>
                                <h2>Careers</h2>
                            </div>
                            <!-- title -->
                            <div class="about-content pera-content">
                                <div class="about-text1 text-justify">
                                    <p>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-img clearfix">
                            <div class="abt-img-set" data-tilt data-tilt-max="10">
                                <img src="{{ asset('front-assets/img/work-with-us/TEL-Footprints.jpeg') }}"
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
