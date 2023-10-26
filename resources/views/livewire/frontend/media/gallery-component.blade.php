<style>
    .gallery-title {
        font-size: 36px;
        color: #0071B4;
        text-align: center;
        font-weight: 500;
        margin-bottom: 70px;
    }

    .gallery-title:after {
        content: "";
        position: absolute;
        width: 7.5%;
        left: 46.5%;
        height: 45px;
        border-bottom: 1px solid #5e5e5e;
    }

    .filter-button {
        font-size: 18px;
        border: 1px solid #0071B4;
        border-radius: 5px;
        text-align: center;
        color: #0071B4;
        margin-bottom: 30px;

    }

    .filter-button:hover {
        font-size: 18px;
        border: 1px solid #0071B4;
        border-radius: 5px;
        text-align: center;
        color: #ffffff;
        background-color: #0071B4;

    }

    .btn-default:active .filter-button:active {
        background-color: #0071B4;
        color: white;
    }

    .port-image {
        width: 100%;
        
    }

    .gallery_product {
        margin-bottom: 30px;
    }
    .gallery_product img {
        border-radius: 10px;
    }
</style>

<div class="container">
    <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 gap-4">
            <h1 class="gallery-title">Gallery</h1>
        </div>
        <div class="text-center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="2022award">Chamber Quality Awards 2022</button>
            <button class="btn btn-default filter-button" data-filter="wau">Wau Power Plant pre-Commissioning</button>
            <button class="btn btn-default filter-button" data-filter="launch">Launch photos</button>            
            <button class="btn btn-default filter-button" data-filter="csr">CSR</button>
            <button class="btn btn-default filter-button" data-filter="US">US - Africa Business Summit</button>
        </div>
        <br>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter 2022award">
            <img src="{{ asset('front-assets/img/gallery/g1.jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter wau">
            <img src="{{ asset('front-assets/img/gallery/wau (1).jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter wau">
            <img src="{{ asset('front-assets/img/gallery/wau (2).jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter wau">
            <img src="{{ asset('front-assets/img/gallery/wau (3).jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter wau">
            <img src="{{ asset('front-assets/img/gallery/wau (4).jpg') }}" class="img-responsive">
        </div>
        {{-- <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter csr">
            <img src="{{ asset('front-assets/img/gallery/csr (1).jpg') }}" class="img-responsive">
        </div> --}}
      
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter launch">
            <img src="{{ asset('front-assets/img/gallery/launch (1).jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter launch">
            <img src="{{ asset('front-assets/img/gallery/launch.jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter launch">
            <img src="{{ asset('front-assets/img/gallery/launch (3).JPG') }}" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter csr">
            <img src="{{ asset('front-assets/img/gallery/csr (2).jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter csr">
            <img src="{{ asset('front-assets/img/gallery/csr (3).jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter csr">
            <img src="{{ asset('front-assets/img/gallery/csr (4).jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter csr">
            <img src="{{ asset('front-assets/img/gallery/csr (5).jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter csr">
            <img src="{{ asset('front-assets/img/gallery/csr (6).jpg') }}" class="img-responsive">
        </div>

        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter US">
            <img src="{{ asset('front-assets/img/gallery/us (1).jpg') }}" class="img-responsive">
        </div>
        
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter US">
            <img src="{{ asset('front-assets/img/gallery/us (3).jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter US">
            <img src="{{ asset('front-assets/img/gallery/us (4).jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter US">
            <img src="{{ asset('front-assets/img/gallery/us (5).jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter US">
            <img src="{{ asset('front-assets/img/gallery/us (6).jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter US">
            <img src="{{ asset('front-assets/img/gallery/us (7).jpg') }}" class="img-responsive">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter US">
            <img src="{{ asset('front-assets/img/gallery/us (8).jpg') }}" class="img-responsive">
        </div>
        {{-- <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter US">
            <img src="{{ asset('front-assets/img/gallery/us (2).jpg') }}" class="img-responsive">
        </div> --}}
      
       
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {

        $(".filter-button").click(function() {
            var value = $(this).attr('data-filter');

            console.log(value);

            if (value == "all") {
                $('.filter').removeClass('hidden');
                $('.filter').show('1000');
            } else {
                $('.filter[filter-item="' + value + '"]').removeClass('hidden');
                $(".filter").not('.filter[filter-item="' + value + '"]').addClass('hidden');
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');

            }
        });

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");

    });
</script>
