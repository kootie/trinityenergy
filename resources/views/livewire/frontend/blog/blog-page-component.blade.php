<div>
       <!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb-section position-relative" data-background="{{ asset('front-assets/img/media/Media.png') }}">
		<div class="background_overlay"></div>
		<div class="container">
			<div class="breadcrumb-content headline">
				<h2 class="breadcrumb-title"> Latest News</h2>
				<div class="breadcrumb_item ul-li">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
						<li class="breadcrumb-item active">Latest News</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->	
    <div class="tt-post-wrapper ">

        <section id="blog" class="blog-section relative-position blog-grid">
            <div class="container">
                <div class="section-title-left text-center">
                    <span class="title-tag"><img src="assets/icon/icon5.svg" alt="">News From Trinity Energy</span>
                    <h2>Our Latest News</h2>
                </div>
                <div class="row center">
                
                    <div class="col-lg-12 col-md-12">
                        <div class="blog-post-content clearfix">

                            <div class="row">
                                @foreach ($blogs as $blog)

                                <div class="col-md-4">
                                    <div class="blog-post-item">
                                        <div class="blog-post-pic">
                                            <img src="front-assets/img/blog/{{$blog->cover_image}}" alt="" width="100%" height="130">
                                           
                                            <a class="blog-linker" href="{{ route('single.blog', ['slug'=>$blog->id]) }}"></a>
                                        </div>
                                    
                                        <div class="blog-post-text">
                                            <h3><a href="#">{{ mb_strimwidth($blog->title, 0, 25, '...') }}</a></h3>
                                            <div class="blog-meta">
                                                <a href="#"><i class="icon-user"></i>Admin</a>
                                                <a href="#"><i class="icon-calendar"></i>{{ $blog->created_at->toFormattedDateString() }}</a>
                                            </div>
                                            <div class="blog-more text-uppercase">
                                                <a href="{{ route('single.blog', ['slug'=>$blog->id]) }}">full story <i class="flaticon-next"></i></a>
                                            </div>
                                        </div>                             
                                        
                                    </div>
                                </div>
                            
                            
                        @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
