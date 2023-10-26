<div>
    <!-- Start of breadcrumb section
 ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section position-relative"
        data-background= "{{ asset('front-assets/img/sustainability/Investors.png') }}">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="breadcrumb-content headline">
                <h2 class="breadcrumb-title"> {{ $empowerment->title }}</h2>
                <div class="breadcrumb_item ul-li">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ $empowerment->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
 ============================================= -->

    <!-- Start of service single section
 ============================================= -->
    <section id="service-details" class="service-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-sidebar">
                    <div class="service-sidebar-widget">
                            <div class="service-cat-widget ul-li-block">
                                <h3 class="widget-title">CSI Strategy</h3>
                                <ul>
                                    @foreach ($projects as $s)
                                    <li><a href="{{ route('sustainability.details',['slug'=>$s->id]) }}">{{ $s->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                       {{-- <div class="service-sidebar-widget">
                            <div class="help-widget pera-content">
                                <h3 class="widget-title">Need Help?</h3>
                                <span>Call us or Email</span>
                                <div class="contact-text pera-content headline">
                                    <p><i class="icon-call-in"></i><strong>{{ settings('landline') }} <br></strong>
                                        {{ settings('email') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="service-sidebar-widget">
                            <div class="opening-hour-widget">
                                <h3 class="widget-title">Opening Hours</h3>
                                <div class="opening-hour-content">
                                    <span>Monday to Friday</span>
                                    <strong>8.00 am – 5.00 pm</strong>
                                </div>
                                <div class="opening-hour-content">
                                    <span>Saturday</span>
                                    <strong>8.00 am – 1.00 pm</strong>
                                </div>
                                <span>Sunday is Closed</span>
                            </div>
                        </div> --}}
                        <div class="add-widget text-center pera-content position-relative"
                            data-background="assets/img/background/bcbg.jpg">
                            <div class="background_overlay" style="background-color:#3551a5"></div>
                            <h3>Energy Solutions for Sustainable Future </h3>
                            <p>Trinity Energy is a fast growing pan-African energy player providing its customers across
                                Africa with reliable access to high-quality fuel products since 2012.</p>
                            <a href="{{ route('contact.us') }}">GET in Touch <img src="assets/img/arrow3.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="service-single-content">
                        <div class="service-details-img-pair">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/img/service/serd1.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/img/service/serd2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <h3>{{ $empowerment->title }}</h3>

                        {!! $empowerment->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of service single section
 ============================================= -->

</div>