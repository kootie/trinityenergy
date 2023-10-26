<div>
    <!-- Start of breadcrumb section
 ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section position-relative"
        data-background="front-assets/img/about/About-Us-Right-Side.png">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="breadcrumb-content headline">
                <h2 class="breadcrumb-title">Partner with us</h2>
                <div class="breadcrumb_item ul-li">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item active">Partner with us</li>
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
                                <h2>Partner With Trinity Energy</h2>
                            </div>
                            <!-- title -->
                            <div class="about-content pera-content">
                                <div class="about-text1 text-justify">
                                    <p>
                                    If you are looking for a reliable and trusted energy partner in Africa, Trinity Energy is here for you. We invite you to join our growing list of satisfied clients and experience the difference we can make in your energy solutions. Our commitment to flexibility, quality, and reliability sets us apart, and we are eager to work with you to meet your energy needs efficiently and sustainability.

                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-img clearfix">
                            <div class="abt-img-set" data-tilt data-tilt-max="10">
                                <img src="{{ asset('front-assets/img/about/About-Us-Right-Side-3.png') }}"
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
