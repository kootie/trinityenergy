<div>
    <!-- Start of breadcrumb section
 ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section position-relative" data-background="{{ asset('front-assets/img/media/Media.png') }}">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="breadcrumb-content headline">
                <h2 class="breadcrumb-title"> Single blog</h2>
                <div class="breadcrumb_item ul-li">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Single Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
 ============================================= -->

    <!-- Start of blog details section
 ============================================= -->
    <section id="blog-details" class="blog-page-area-section blog-details-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-content">
                        <div class="blog-page-post-item">
                            <div class="blog-post-thumbnile-text pera-content headline">
                                <div class="blog-post-thumb-img position-relative">
                                    <img src="{{ asset('front-assets/img/blog') }}/{{ $blog->cover_image }}"
                                        alt="">
                                    <div class="blog-category text-uppercase">
                                        <a href="#">Trinity energy</a>
                                    </div>
                                </div>
                                <div class="blog-post-meta">
                                    <a href="#"><i class="far fa-user"></i>Admin</a>
                                    <a href="#"><i
                                            class="far fa-calendar-alt"></i>{{ $blog->created_at->toFormattedDateString() }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-details-text-content headline">
                            {!! $blog->body !!}

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="blog-sidebar">
                        <div class="blog-sidebar-widget headline pera-content">
                            <div class="search-widget">
                                <h3 class="widget-title">Search</h3>
                                <form action="#">
                                    <input class="search-input" type="search" placeholder="keyword...">
                                    <button type="submit"><i class="fas fa-search"></i> </button>
                                </form>
                            </div>
                        </div>
                        <!-- /sidebar-widget -->

                        <!-- /sidebar-widget -->
                        <div class="blog-sidebar-widget headline pera-content">
                            <div class="recent-post-widget">
                                <h3 class="widget-title">Recent Posts</h3>
                                <div class="latest-blog-widget">
                                    @foreach ($blogs as $item)
                                        <div class="blog-img-content">
                                            <div class="blog-img float-left">
                                                <img src="{{ asset('front-assets/img/blog') }}/{{ $blog->cover_image }}" alt="">
                                            </div>
                                            <div class="blog-text headline">
                                                <h3> <a href="#">{{ mb_strimwidth($blog->title, 0, 35, '...') }}</a></h3>
                                                <span>{{ $blog->created_at->toFormattedDateString() }}</span>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                        <!-- /sidebar-widget -->
                        <div class="blog-sidebar-widget headline pera-content">
                            <div class="popular-tag-widget ul-li">
                                <h3 class="widget-title">Popular Tags</h3>
                                <ul>
                                    <li><a href="#">Power</a></li>
                                    <li><a href="#">Electricity</a></li>
                                    <li><a href="#">Energy</a></li>
                                    <li><a href="#">Wind Turbine</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Solar Energy</a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">Hybrid</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar-widget -->
                        <div class="blog-sidebar-widget headline pera-content">
                            <div class="project-gallery-widget clearfix ul-li">
                                <h3 class="widget-title">Popular Tags</h3>
                                <ul>
                                    <li><a href="#"><img src="assets/img/gallery/g1.jpg" alt=""></a>
                                    </li>
                                    <li><a href="#"><img src="assets/img/gallery/g2.jpg" alt=""></a>
                                    </li>
                                    <li><a href="#"><img src="assets/img/gallery/g3.jpg" alt=""></a>
                                    </li>
                                    <li><a href="#"><img src="assets/img/gallery/g4.jpg" alt=""></a>
                                    </li>
                                    <li><a href="#"><img src="assets/img/gallery/g5.jpg" alt=""></a>
                                    </li>
                                    <li><a href="#"><img src="assets/img/gallery/g6.jpg" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /sidebar-widget -->
                        <div class="add-widget text-center pera-content position-relative"
                            data-background="assets/img/background/bcbg.jpg">
                            <div class="background_overlay"></div>
                            <h3>Do you need
                                upgrades, repairs
                                or maintainance
                                services also?</h3>
                            <p>Book a free consultancy
                                with one of our many experts</p>
                            <a href="#">GET in Touch <img src="assets/img/arrow3.png" alt=""></a>
                        </div>
                        <!-- /sidebar-widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of blog details section
 ============================================= -->

</div>
