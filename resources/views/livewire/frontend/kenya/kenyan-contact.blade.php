<div>
    <!-- Start of breadcrumb section
 ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section position-relative" data-background="assets/img/background/bcbg.jpg">
        <div class="background_overlay"></div>
        <div class="container">
            <div class="breadcrumb-content headline">
                <h2 class="breadcrumb-title"> Contact us</h2>
                <div class="breadcrumb_item ul-li">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Get in Touch</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
 ============================================= -->

    <!-- Start of Contact map section
 ============================================= -->
    <div id="google-map">
        <div class="earth3dmap-com">
            <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no"
                    marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=Trinity%20Energy%20(Kenya)%20Limited%208th%20Floor,%20Delta%20Chambers%20Waiyaki%20Way,%20Westlands+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                        href="https://www.maps.ie/population/">Population calculator map</a></iframe></div>

            <div
                style="color: #333; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right; padding: 10px;">
                <a style="color: #333; text-decoration: underline; font-size: 14px; font-family: Arial, Helvetica, sans-serif; text-align: right;"
                    href="http://earth3dmap.com/?from=embed" target="_blank"></a>
            </div>
        </div><!-- /#google-map-->
        <!-- End Contact map section
 ============================================= -->

        <!-- Start of Contact content
 ============================================= -->
        <section id="contact-page-area" class="contact-page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-form-text headline pera-content">
                            <h3>Have a question? Get a
                                Free Consultation </h3>

                            <div class="el-contact-info">
                                <div class="contact-address">
                                    <div class="contact-icon">
                                        <i class="icon-pin"></i>
                                    </div>
                                    <div class="contact-text pera-content headline">
                                        <h4>Corporate Office</h4>
                                        <p>Trinity Energy (Kenya) Limited 8th Floor, Delta Chambers Waiyaki Way,
                                            Westlands
                                            P.O. Box 17608 - 00100 Nairobi</p>
                                    </div>
                                </div>
                                <div class="contact-address">
                                    <div class="contact-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="contact-text pera-content headline">
                                        <h4>Customer Support</h4>
                                        <p>Monday - Friday 08:00 - 17:00 <br>
                                            Saturday - Sunday 08:00 - 16:00</p>
                                    </div>
                                </div>
                                <div class="contact-address">
                                    <div class="contact-icon">
                                        <i class="icon-call-in"></i>
                                    </div>
                                    <div class="contact-text pera-content headline">
                                        <h4>Contact us</h4>
                                        <p><STRONG>+254 704/780 200 900 <br></STRONG>


                                            supplykenya@trinityenergyltd.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="el-contact-form headline">
                            <h3>Send a Message!</h3>
                            <div class="contact-form-area contact-form">
                                <form method="post" id="contact-form" wire:submit.prevent='sendMessage'>

                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input class="" name="name" type="text" placeholder="Full Name" wire:model='name'>
    
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input class="" name="email" type="email" placeholder="Email" wire:model='email'>
    
                                    @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input class="" name="subject" type="text" placeholder="Subject" wire:model='subject'>
    
                                    @error('comments')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <textarea id="message" name="message" placeholder="Comments*"
                                        wire:model='comments'></textarea>
    
                                    <div class="sub-button  text-uppercase">
                                        <button type="submit" value="Submit">Send Message <img src="assets/img/arrow3.png"
                                                alt=""></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Contact content
 ============================================= -->
    </div>
