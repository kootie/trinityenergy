<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ settings('name') }}</title>
    <link rel="shortcut icon" href="{{ asset('front-assets/img/logo/favicon.png') }}" type="image/x-icon">
    <meta name="author" content="Templines">
    <meta name="description" content="Trinity Energy">
    <meta name="keywords"
        content="alternative energy, solar energy, energy business, green energy, heating, hydropower, nature energy, power saving, recycling, renewable energy, solar energy, Solar Panels, fuel energy">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('front-assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/video.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

   
    <link rel="stylesheet" href="{{ asset('front-assets/fontawesome-free-6.4.2-web/css/all.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <style>
        .subdropdown ul {
            display: none !important;
        }

        .card-deck {
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
        }

        .contact-page-section {
            padding-top: 30px !important;
            padding-left: 0px !important;
            padding-right: 0px !important;

        }

        .contact-card {
            height: 450px !important;
        }

        /* Style for top-level dropdown menu */
        .dropdown-menu {
            display: none;
            /* Other styles for positioning, background, etc. */
        }

        /* Show the top-level dropdown menu when its parent is hovered */
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Style for nested dropdown menu */
        .dropdown-menu2 {
            display: none;
            position: absolute;
            background-color: #0071B4;
            padding: 10px;
            left: 100%;
            top: 0;
            color: black;
        }

        /* Show the nested dropdown menu when its parent is hovered */
        .weare:hover>.dropdown-menu2 {
            display: block;
        }

        /* Prevent the nested dropdown from disappearing when cursor moves to it */
        .weare:hover {
            position: relative;
        }
        .show{
            color: black;
        }
        .show a{
            color: black;
        }
    </style>
    @livewireStyles
</head>

<body class="web-body">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0"
        nonce="DF3zVhcY"></script>
    {{-- <div id="preloader"></div> --}}
    <div class="up">
        <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
    </div>

    <!-- Start of header section
 ============================================= -->
    <header id="header_id" class="main_header header_style_one">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        <div class="header_top_info float-right">

                            <div class="top_info_item top_info_social ul-li clearfix">
                                <ul>
                                    <li>
                                        <a href="{{ route('kenya.contact') }}">
                                            <img height="30" src="{{ asset('front-assets/img/flags/kenya.png') }}"
                                                alt="">
                                    </li>
                                    <li>
                                        <a href="{{ route('south.sudan.contact') }}">
                                            <img height="30"
                                                src="{{ asset('front-assets/img/flags/south-sudan.png') }}"
                                                alt="">
                                    </li>
                                    <li>
                                        <a href="{{ route('drc.contact') }}">
                                            <img height="30"
                                                src="{{ asset('front-assets/img/flags/democratic-republic-of-congo.png') }}"
                                                alt="">
                                    </li>
                                    <li><a target='_blank' href="{{ route('login') }}"><i class="fa-solid fa-user"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-main-menu clearfix">
            <div class="container-fluid">
                <div class="brand-logo float-left">
                    <a href="{{ route('homepage') }}"><img
                            src="{{ asset('front-assets/img/logo/Trinity-Energy.png') }}" alt=""></a>
                </div>


                <nav class="main_navigation desktop-menu ul-li">
                    <ul id="main-nav" class="navbar-nav text-uppercase clearfix">

                        <li><a href="{{ route('homepage') }}">Home</a></li>

                       {{-- <li class="dropdown">
                            <a href="{{ route('who.we.are') }}">About Us</a>
                            <ul class="dropdown-menu clearfix">
                                <li class="weare">
                                    <a href="/who-we-are">Who We Are</a>
                                    <ul class="dropdown-menu2 clearfix">
                                        <li class="show"><a class="" href="{{ route('who.we.are') }}">Who We Are</a></li>
                                        <li class="show"><a class="" href="{{ route('management') }}">Management</a></li>
                                        <li class="show"><a class="" href="{{ route('our.presence') }}">Our Presence</a></li>
                                        <li class="show"><a class="" href="{{ route('energy.solutions') }}">Energy Solutions</a></li>
                                        <li class="show"><a class="" href="{{ route('commitment') }}">Our Commitment</a></li>                                        
                                        <li class="show"><a class="" href="{{ route('expanding') }}">Expanding our Services</a></li>
                                        <li class="show"><a class="" href="{{ route('partner.with.us') }}">Partner With Us</a></li>
                                      </ul>
                                </li>                          

                            </ul>
                        </li> --}}

                        <li class="dropdown">
                        {{-- <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Who We Are
                        </a> --}}
                        <a href="/who-we-are">Who We Are</a>
                            <ul class="dropdown-menu clearfix">
                                <li class="show"><a class="" href="{{ route('who.we.are') }}">Who We Are</a></li>
                                        <li class="show"><a class="" href="{{ route('management') }}">Management</a></li>
                                        <li class="show"><a class="" href="{{ route('our.presence') }}">Our Presence</a></li>
                                        <li class="show"><a class="" href="{{ route('energy.solutions') }}">Energy Solutions</a></li>
                                        <li class="show"><a class="" href="{{ route('commitment') }}">Our Commitment</a></li>                                        
                                        <li class="show"><a class="" href="{{ route('expanding') }}">Expanding our Services</a></li>
                                        <li class="show"><a class="" href="{{ route('partner.with.us') }}">Partner With Us</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('services') }}">Services</a>
                        </li>                        
                        <li><a href="{{ route('sustainability') }}">sustainability</a></li>

                        <li class="dropdown">
                            <a href="#">Media</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a href="{{ route('blog.listing') }}">Our stories</a></li>
                                <li><a href="{{ route('press.releases') }}">Press releases </a></li>
                                <li><a href="#">Thought leadership </a></li>
                                <li><a href="{{ route('gallery') }}">Gallery </a></li>
                            </ul>
                        </li>


                        <li><a href="{{ route('investor') }}">Investors</a></li>

                        <li class="dropdown">
                            <a href="#">Work With Us</a>
                            <ul class="dropdown-menu clearfix">
                                <li><a href="{{ route('careers') }}">Careers</a></li>
                                <li><a href="{{ route('procurement') }}">Procurement</a></li>
                                <li><a href="{{ route('testimonials') }}">Testimonials </a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('contact.us') }}">Contact Us</a></li>


                    </ul>
                </nav>


            </div>
        </div>
        <!-- desktop-menu -->
        <div class="el-mobile_menu relative-position">
            <div class="el-mobile_menu_button s2-open_mobile_menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="el-mobile_menu_wrap">
                <div class="mobile_menu_overlay s2-open_mobile_menu"></div>
                <div class="el-mobile_menu_content">
                    <div class="el-mobile_menu_close s2-open_mobile_menu">
                        <i class="fas fa-arrow-circle-right"></i>
                    </div>
                    <div class="m-brand-logo text-center">
                        <a href="#"><img src="{{ asset('front-assets/img/logo/Trinity-Energy.png') }}"
                                alt=""></a>
                    </div>

                    <nav class="el-mobile-main-navigation  clearfix ul-li">
                        <ul id="main-nav" class="navbar-nav text-capitalize clearfix">
                            <li class="dropdown">
                                <a href="{{ route('homepage') }}">Home</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="{{ route('homepage') }}">Home</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li class="dropdown">
                                <a href="service.html">Services</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="service.html">Service</a></li>
                                    <li><a href="service-single.html">Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="blog.html">News</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-single.html">Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="mobile-contact-info text-center ul-li-block">
                        <ul>
                            <li> <i class="icon-call-out"></i>+211 915633230</li>
                            <li> <i class="icon-envelope-letter"></i>info@trinityenergyltd.com</li>
                        </ul>
                    </div>
                    <div class="mobile-follow text-center ul-li">
                        <span>Follow Trinity:</span>
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                    <div class="mobile-consult-btn text-uppercase">
                        <a href="#">Consultation</a>
                    </div>
                </div>
            </div>
        </div>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <style>
            *{
                font-family: 'Roboto Slab', serif !important;
            }
        </style>
    </header>
    <!-- End of header section
 ============================================= -->

    {{ $slot }}

    <!-- Start of Footer section
 ============================================= -->
    <footer id="footer-id" class="footer-section">

        <div class="footer-content">
            <div class="container">
                <div class="footer-contact-info">

                </div>
                <div class="footer-widget-area">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget-item pera-content">
                                <div class="footer-logo-widget text-justify">
                                    <p>We are proud to be at the forefront of the energy industry across Africa,
                                        providing a comprehensive range of energy solutions and services to meet the
                                        diverse needs of individuals, businesses, and industries.</p>
                                    <div class="footer-social">
                                    <a href="{{ route('kenya.contact') }}">
                                            <img height="32" src="{{ asset('front-assets/img/flags/kenya.png') }}"
                                                alt="">
                                        <a href="https://www.facebook.com/p/Trinity-Energy-Kenya-100077987671729/"><i class="fab fa-facebook-f" style="color: #3b5998;"></i></a>
                                        <a href="https://twitter.com/TrinityEnergyKe"><i class="fab fa-twitter" style="color: #55acee;"></i></a>
                                        <a href="https://www.instagram.com/p/CynNWZlshhM/"><i class="fab fa-instagram" style="color: #ac2bac;"></i></a>
                                        <a href="https://ke.linkedin.com/company/trinity-energy-kenya"><i class="fab fa-linkedin-in" style="color: #0082ca;"></i></a>
                                        <a href="https://www.youtube.com/@trinityenergykenya7174"><i class="fab fa-youtube" style="color: #ed302f;"></i></a>
                                    </div>
                                    <br>
                                    <div class="footer-social">
                                    <a href="{{ route('south.sudan.contact') }}">
                                            <img height="32" src="{{ asset('front-assets/img/flags/south-sudan.png') }}"
                                                alt="">                                                                                            
                                        <a href="https://www.facebook.com/TrinityEnergySouthSudan/"><i class="fab fa-facebook-f" style="color: #3b5998;"></i></a>
                                        <a href="https://twitter.com/tel_africa?lang=en"><i class="fab fa-twitter" style="color: #55acee;"></i></a>
                                        <a href="https://www.instagram.com/p/CZ1_Z9jqt6E/"><i class="fab fa-instagram" style="color: #ac2bac;"></i></a>
                                        <a href="https://www.linkedin.com/company/trinity-energy/"><i class="fab fa-linkedin-in" style="color: #0082ca;"></i></a>
                                        <a href="https://www.youtube.com/channel/UCCY_EH1k_u07uljGb7bVxlA"><i class="fab fa-youtube" style="color: #ed302f;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget-item pera-content">
                                <div class="footer-menu-widget ul-li-block">
                                    <h3 class="el-widget-title">Quick Links</h3>
                                    <ul>
                                        <li><a href="{{ route('contact.us') }}">Contact Us</a></li>                                        
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms and Conditions</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget-item pera-content">
                                <div class="footer-location-widget ul-li-block">
                                    <div class="loaction-select position-relative">
                                    </div>
                                    <div class="fb-page"
                                        data-href="https://www.facebook.com/TrinityEnergySouthSudan"
                                        data-tabs="timeline" data-width="500" data-height="250"
                                        data-small-header="true" data-adapt-container-width="true"
                                        data-hide-cover="true" data-show-facepile="true">
                                        <blockquote
                                            cite="https://www.facebook.com/TrinityEnergySouthSudan"
                                            class="fb-xfbml-parse-ignore"><a
                                                href="https://www.facebook.com/TrinityEnergySouthSudan">Trinity
                                                Energy South Sudan</a></blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget-item pera-content">
                                <div class="footer-location-widget ul-li-block">
                                    <div class="loaction-select position-relative">
                                    </div>
                                    <div class="fb-page"
                                        data-href="https://www.facebook.com/p/Trinity-Energy-Kenya-100077987671729/"
                                        data-tabs="timeline" data-width="500" data-height="250"
                                        data-small-header="true" data-adapt-container-width="true"
                                        data-hide-cover="true" data-show-facepile="true">
                                        <blockquote
                                            cite="https://www.facebook.com/p/Trinity-Energy-Kenya-100077987671729/"
                                            class="fb-xfbml-parse-ignore"><a
                                                href="https://www.facebook.com/p/Trinity-Energy-Kenya-100077987671729/">Trinity
                                                Energy Kenya</a></blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-text text-center">
            <p>© 2023 <a href="#">TRINITY ENERGY</a></p>
            <!-- <div class="copyright-menu">
                <a href="#">Terms</a>
                <a href="#"> Privacy Policy </a>
                <a href="#">Sitemap</a>
            </div> -->
        </div>
    </footer>
    <!-- End of Footer section
 ============================================= -->



    <!-- For Js Library -->
    <script src="{{ asset('front-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jarallax.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/appear.js') }}"></script>
    <script src="{{ asset('front-assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('front-assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script>
        //the first line of code states that the script will run only after the page has loaded 
        //and the script is ready to be executed.
        $(document).ready(function() {
            $("#exampleModal").modal('toggle');

            window.addEventListener("close-example-modal", (event) => {
                $("#exampleModal").modal("hide");
            });
        });


        $('.subdropdown').hover(function() {
            ($this).toggle()
        })

        function search() {
            // Get the search query entered by the user
            const searchQuery = document.getElementById('searchInput').value.trim().toLowerCase();

            // Get the element that contains the search results
            const searchResultsContainer = document.getElementById('searchResults');

            // Get all the elements within the search results container
            const elementsToSearch = searchResultsContainer.getElementsByTagName('*');

            // Loop through the elements and hide/show them based on the search query
            for (const element of elementsToSearch) {
                // Check if the element's innerText (content) contains the search query
                const content = element.innerText.toLowerCase();
                if (content.includes(searchQuery)) {
                    element.style.display = 'block'; // Show the element if it matches the search query
                } else {
                    element.style.display = 'none'; // Hide the element if it does not match the search query
                }
            }
        }
    </script>

    @stack('scripts')
    @livewireScripts
</body>

</html>
