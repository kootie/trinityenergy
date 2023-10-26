<head>
    <!-- Add these lines to your app.blade.php layout -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<div>
<!-- Start of breadcrumb section
 ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section position-relative"
        data-background="{{ asset('front-assets/img/about/About-Us.png') }}">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="breadcrumb-content headline">
                <h2 class="breadcrumb-title"> Management</h2>
                <div class="breadcrumb_item ul-li">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item active">Management</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
 ============================================= -->

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
{{--<section id="eltron-team" class="eltron-team-section about-page-team">
    <div class="container">
        <div class="section-title-left text-center">
           <!-- <span class="title-tag"><img src="assets/icon/icon5.svg" alt="">Energy Which Matters</span> -->
            <h2>Meet the Team</h2>
        </div>
<div class="team-content">
				 <div class="row">
					<div class="col-lg-3  col-md-6">
						<div class="team-member-box">
							<div class="team-img">
								<img style="width:261px" src="{{ asset('front-assets/img/team/Management-1.png') }}" alt="">
							</div>
							<div class="team-text pera-content text-center headline">
								<h3>Robert Mdeza</h3>
								<p>Chief Executive Officer</p>
								<div class="team-social">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
									<a href="#"><i class="fab fa-linkedin-in"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-md-6">
						<div class="team-member-box">
							<div class="team-img">
								<img src="{{ asset('front-assets/img/team/Management-2.png') }}" alt="">
							</div>
							<div class="team-text pera-content text-center headline">
								<h3>Ken Mugambi</h3>
								<p>Deputy CEO</p>
								<div class="team-social">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
									<a href="#"><i class="fab fa-linkedin-in"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3  col-md-6">
						<div class="team-member-box">
							<div class="team-img">
								<img src="{{ asset('front-assets/img/team/Management-4.png') }}" alt="">
							</div>
							<div class="team-text pera-content text-center headline">
								<h3>Miriam Dangasuk</h3>
								<p>Head of Programme Management</p>
								<div class="team-social">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
									<a href="#"><i class="fab fa-linkedin-in"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-md-6">
						<div class="team-member-box">
							<div class="team-img">
								<img style="height:315px" src="{{ asset('front-assets/img/team/Management-6.png') }}" alt="">
							</div>
							<div class="team-text pera-content text-center headline">
								<h3>Sampath Kumar</h3>
								<p>Operations Manager</p>
								<div class="team-social">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-google-plus-g"></i></a>
									<a href="#"><i class="fab fa-linkedin-in"></i></a>
								</div>
							</div>
						</div>
					</div>
				
	            </div> 
</div>

</div>
</section>--}}
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->



<!-- Start of Team section
 ============================================= -->
<section id="eltron-team" class="eltron-team-section about-page-team">
    <div class="container">
        <div class="section-title-left text-center">
           <!-- <span class="title-tag"><img src="assets/icon/icon5.svg" alt="">Energy Which Matters</span> -->
            <h2>Meet the Team</h2>
        </div>
        <div class="team-content">
        
				<div class="row justify-content-center">
					<div class="col-lg-3  col-md-6">
						<div class="team-member-box">
							<div class="team-img">
								<img style="width:261px" src="{{ asset('front-assets/img/team/JOEL0855.jpg') }}" alt="">
							</div>
							<div class="team-text pera-content text-center headline">
								<h3>Akol Ayii</h3>
								<p class="text-center">Founder & Group Chairman</p>
								<div class="team-social">
                                <button type="button" class="btn btn-primary" data-toggle="popover" title="Bio" data-content="Akol Ayii is the Founder and Chairman
                                                    of Trinity Group. The group owns investments in various sectors including Energy, Power,
                                                    Infrastructure, Mining, Media and Technology. Since 2006, the company
                                                    has grown to lead five business units with staff of 400 and USD 1.3 billion annual Turnover.">Read Bio</button>
								</div>
							</div>
						</div>
					</div>

                </div>
<p></p>
<p></p>
<p></p>

        <div class="row justify-content-center" >
                <div class="col-md-4">
                    <div class="card">
                        <img style="height: 350px; object-fit: cover;"
                            src="{{ asset('front-assets/img/team/Management-1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Robert Mdeza</h5>
                            <p class="card-text">Chief Executive Officer</p>  
                            <button type="button" class="btn btn-primary" data-toggle="popover" title="Bio" data-content="Mr Mdeza, a chartered accountant, holds a Bachelor’s Degree in Commerce from the University of
Malawi. Previously the CEO of National Oil Company of Malawi, Mr Mdeza has over 18 years of
experience in oil and gas.">Read Bio</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img style="height: 350px; object-fit: cover;"
                            src="{{ asset('front-assets/img/team/Management-2.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mr Ken Mugambi</h5>
                            <p class="card-text">
                                Deputy Chief Executive Officer
                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="popover" title="Bio" data-content="Previously an executive at the National Oil Corporation of Kenya, Ken Mugambi Is a strategist with
over 13 years of experience in oil and gas. Mr Mugambi holds an MBA in Global Energy from the
University of Calgary.">Read Bio</button>

                        </div>
                    </div>
                </div>
         </div>

            <div class="team">
                
                <div class="col-md-4">
                    <div class="card">
                        <img style="height: 380px; object-fit: cover;"
                            src="{{ asset('front-assets/img/team/Management-3.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body" style="background-color:#00C6D6">
                            <h5 class="card-title">Mr Simon Omondi</h5>
                            <p class="card-text">
                                Chief Accountant
                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="popover" title="Bio" data-content="Simon Omondi is a certified public accountant and a full member of the Institute of Certified Public
Accountants of Kenya (ICPAK) with over xx years of experience. Mr. Omondi holds an MA and
Bachelors in Economics from the University of Nairobi.">Read Bio</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img style="    height: 380px; object-fit: cover;"
                            src="{{ asset('front-assets/img/team/Management-4.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color:#00C6D6">
                            <h5 class="card-title">Ms Miriam Dangasuk</h5>
                            <p class="card-text">
                                Head of Program Management                             

                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="popover" title="Bio" data-content="Ms. Dangasuk is an accredited project management professional with over 12 years of
experience. Ms Miriam holds an MSc in Environmental and Energy Engineering from the
University of Sheffield as well as an MA in Global Environmental Policy from American University.">Read Bio</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img style="    height: 380px; object-fit: cover;"
                            src="{{ asset('front-assets/img/team/Management-5.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color:#00C6D6">
                            <h5 class="card-title">Mr Philip Waden</h5>
                            <p class="card-text">
                                Power Projects Manager
                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="popover" title="Bio" data-content="Mr Waden received his MSc and PhD degrees in Mechanical Engineering from the Universiti
Teknologi Petronas and Wuhan University of Technology. Philip has over 14 years of experience
and has previously taught engineering at the University of Juba.">Read Bio</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img style="    height: 380px; object-fit: cover;"
                            src="{{ asset('front-assets/img/team/Management-6.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color:#00C6D6">
                            <h5 class="card-title">Mr Sampath Kumar</h5>
                            <p class="card-text">

                                Operations Manager

                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="popover" title="Bio" data-content="Mr. Sampath has over 13 years of experience in the Oil and Gas sector. He has previously worked
for Reliance Industries as an operations manager. He holds a BSc Mechanical Engineering and an
MBA from Sikkim Manipal University.">Read Bio</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img style="    height: 380px; object-fit: cover;"
                            src="{{ asset('front-assets/img/team/Management-7.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color:#00C6D6">
                            <h5 class="card-title"> Mr Yoasi Nafitale</h5>
                            <p class="card-text">

                               
                                Business Development Manager
                                

                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="popover" title="Bio" data-content="Previously, a General Trade Manager at Total Energies Malawi limited, with 23 years of
experience in oil and gas. Mr Nafitale holds an MBA from Management College of Southern Africa
and Bachelor of Business Administration from the University of Malawi.">Read Bio</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img style="    height: 380px; object-fit: cover;"
                            src="{{ asset('front-assets/img/team/Management-8.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color:#00C6D6">
                            <h5 class="card-title"> Mr Abdalla Sudi</h5>
                            <p class="card-text">
                                
                                Retail Manager
                                
                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="popover" title="Bio" data-content="Mr. Sudi has over 15 years of experience in the Oil and Gas sector/commercial space. He has
previously worked at Vivo Energy as Head of Retail. Abdalla holds an MBA in Strategic
Management from United States International University.">Read Bio</button>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img style="    height: 380px; object-fit: cover;"
                            src="{{ asset('front-assets/img/team/Management-10.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color:#00C6D6">
                            <h5 class="card-title">Mr Dhor Aher</h5>
                            <p class="card-text">
                                
                            HR & Administration Manager
                                
                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="popover" title="Bio" data-content="Mr. Aher has 7 years’ experience in the United States military holding various supervisory and
management positions. Dhor holds an MBA from the University of Mary, an MSA from Central
Michigan University, and an associate's Degree in Information Technology from the Community
College of the Air Force.">Read Bio</button>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img style="    height: 380px; object-fit: cover;"
                            src="{{ asset('front-assets/img/team/Management-9.png') }}" class="card-img-top" alt="...">
                        <div class="card-body" style="background-color:#00C6D6">
                            <h5 class="card-title"> Ms. Sitmah Zamzam</h5>
                            <p class="card-text">                  
                               
                                Sales and Marketing Manager                     

                            </p>
                            <button type="button" class="btn btn-primary" data-toggle="popover" title="Bio" data-content="Previously, a Sales and Marketing Manager at Crown Insurance Company Limited Juba South
Sudan with over 8 years of experience. Stimah Zamzam holds a Bachelor of Business
Administration from Makerere University.">Read Bio</button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
</div>
<!-- End of Team section
 ============================================= -->



@push('scripts')
    <script>
        window.onload = function() {
            $('.team').slick({
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: true,
                prevArrow: '<button class="team-prev btn btn-primary me-1"> << </button>',
                nextArrow: '<button class="team-prev btn btn-primary me-1"> >> </button>',
                centerMode: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                pauseOnHover: true
            });
        };
    </script>
    
    <script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });
</script>

@endpush
