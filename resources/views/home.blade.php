	@extends('layouts.default')
@section('content')
<style type="text/css">
	u{
		-webkit-clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%);
		clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%);
	}
</style>
    <body id="body">
	    <!--
	    Start Preloader
	    ==================================== -->
		<div id="loading-mask">
			<div class="loading-img">
				<img alt="Meghna Preloader" src="img/preloader.gif"  />
			</div>
		</div>
        <!--
        End Preloader
        ==================================== -->
		
        <!--
        Welcome Slider
        ==================================== -->
		<section id="home">	    
		
            <div id="slitSlider" class="sl-slider-wrapper">
				<div class="sl-slider">
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
						<div class="carousel-caption">
							<div>
								<!-- <img class="wow fadeInUp" src="img/meghna.png" alt="Meghna"> -->
								<h2 data-wow-duration="500ms"  data-wow-delay="500ms" class="heading animated fadeInRight">Selamat Datang</h2>
								<h3 data-wow-duration="500ms"  data-wow-delay="500ms" class="heading animated fadeInRight">Komplek Bukit Sawangan Indah</h3>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInDown">Highly Responsive</h2>
								<h3 class="animated fadeInUp">With all Mejor Browser support including IE 9</h3>
								<a class="btn btn-green animated fadeInUp" href="#">Get Started</a>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInRight">One Page Parallax HTML Template</h2>
								<h3 class="animated fadeInLeft">Clean and Professional Design</h3>
								<a class="btn btn-green animated fadeInUp" href="#">Learn More</a>
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->

				</div><!-- /sl-slider -->
				
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		<!--/#home section-->
		
        <!-- 
        Fixed Navigation
        ==================================== -->
       

				<!-- main nav -->
                @include('layouts.navigation')
				<!-- /main nav -->
			
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<!--
		Start About Section
		==================================== -->
		<section id="about" class="bg-one">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2>Tentang <span class="color">Kami</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" >
						<div class="wrap-about">							
							<div class="icon-box">
								<i class="fa fa-lightbulb-o fa-4x"></i>
							</div>					
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3>Balai Warga RW 05</h3>								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="wrap-about">
							<div class="icon-box">
								<i class="fa fa-users fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3>Masjid Al-Iman</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->					
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="wrap-about kill-margin-bottom">
							<div class="icon-box">
								<i class="fa fa-users fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3>Yayasan Bunga Melati</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum eum dignissimos</p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!--
		Start Main Features
		==================================== -->
		<section id="main-features">
			<div class="container">
				<div class="row">
					
					<!-- features item -->
					<div id="features">
						<div class="item">
							
							<div class="features-item">
								
								<!-- features media -->
								<div class="col-md-6 feature-media media-wrapper wow fadeInUp" data-wow-duration="500ms">
									<iframe src="https://www.youtube.com/embed/9shc5ovgztA" allowfullscreen></iframe>
								</div>
								<!-- /features media -->
								
								<!-- features content -->
								<div class="col-md-6 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
									<h3>Video tentang BSI</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dolores corporis maxime modi amet nisi quod delectus voluptas deleniti facere. Suscipit, modi ex magni quam nesciunt ullam nemo natus soluta!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dolores corporis maxime modi amet nisi quod delectus voluptas deleniti facere. Suscipit, modi ex magni quam nesciunt ullam nemo natus soluta!</p>
									<a href="#" class="btn btn-transparent">Learn More</a>
									<a href="#" class="btn btn-transparent">Purchase Theme</a>
								</div>
								<!-- /features content -->
								
							</div>
						</div>
						
						<div class="item">
							<div class="features-item">
							
								<!-- features media -->
								<div class="col-md-6 feature-media wow fadeInUp" data-wow-duration="500ms">
									<img src="img/blog/3D-beach-art.jpg" alt="3D Beach Art | Meghna" class="img-responsive">
								</div>
								<!-- /features media -->
								
								<!-- features content -->
								<div class="col-md-6 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
									<h3>Main Features of Meghna</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dolores corporis maxime modi amet nisi quod delectus voluptas deleniti facere. Suscipit, modi ex magni quam nesciunt ullam nemo natus soluta!</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dolores corporis maxime modi amet nisi quod delectus voluptas deleniti facere. Suscipit, modi ex magni quam nesciunt ullam nemo natus soluta!</p>
									<a href="#" class="btn btn-transparent">Learn More</a>
									<a href="#" class="btn btn-transparent">Purchase Theme</a>
								</div>
								<!-- /features content -->
								
							</div>
						</div>
					</div>
					<!-- /features item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!--
		Start Counter Section
		==================================== -->
		
		<section id="counter" class="parallax-section">
			<div class="container">
				<div class="row">
				
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="320">320</span>
							</div>
							<i class="fa fa-users fa-3x"></i>
							<h3>Happy Clients</h3>
						</div>
					</div>
					<!-- end first count item -->
				
					<!-- second count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="565">565</span>
							</div>
							<i class="fa fa-check-square fa-3x"></i>
							<h3>Projects completed</h3>
						</div>
					</div>
					<!-- end second count item -->
				
					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="95">95</span>
								<span>%</span>
							</div>
							<i class="fa fa-thumbs-up fa-3x"></i>
				            <h3>Positive feedback</h3>
							
						</div>
					</div>
					<!-- end third count item -->
					
					<!-- fourth count item -->
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="counters-item kill-margin-bottom">
							<div>
							    <span data-speed="3000" data-to="2500">2500</span>
							</div>
							<i class="fa fa-coffee fa-3x"></i>
							<h3>Cups of Coffee</h3>
						</div>
					</div>
					<!-- end fourth count item -->
					
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->
		
		
		<!-- Start Services Section
		==================================== -->
		
		<section id="services" class="bg-one">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Pelayanan <span class="color">Umum</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
                    <!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-wordpress fa-5x"></i>
							</div>
							<a href="http://www.google.com"><h3>Balai Warga RW 05</h3></a>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</article>
                    <!-- End Single Service Item -->
                    
                    <!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-desktop fa-5x"></i>
							</div>
							<h3>Posyandu</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</article>
                    <!-- End Single Service Item -->
                    
                    <!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-play fa-5x"></i>
							</div>
							<h3>Makam Yayasan Bunga Melati</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-eye fa-5x"></i>
							</div>
							<h3>Masjid Al-Iman</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-android fa-5x"></i>
							</div>
							<h3>PDAM</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="service-block text-center kill-margin-bottom">
							<div class="service-icon text-center">
								<i class="fa fa-link fa-5x"></i>
							</div>
							<h3>Networking</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
						
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		
		<!-- Start Portfolio Section
		=========================================== -->
		
		<section id="showcase">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="500ms">
					<div class="col-lg-12">
					
						<!-- section title -->
						<div class="title text-center">
							<h2>Fasilitas <span class="color">Umum</span></h2>
							<div class="border"></div>
						</div>
						<!-- /section title -->
					
						<!-- portfolio item filtering -->
						<div class="portfolio-filter clearfix">
							<ul class="text-center">
							    <li><a href="javascript:void(0)" class="filter" data-filter="all">Semua</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".app">Musholla</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".web">Lapangan</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".photoshop">Balai Warga</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".illustrator">Keamanan</a></li>
							</ul>
						</div>
						<!-- /portfolio item filtering -->
						
					</div> <!-- /end col-lg-12 -->
				</div> <!-- end row -->
			</div>	<!-- end container -->
	
			<!-- portfolio items -->
			<div class="portfolio-item-wrapper wow fadeInUp" data-wow-duration="500ms">
                <ul id="og-grid" class="og-grid">
				
					<!-- single portfolio item -->	
					<li class="mix app">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/portx1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Azuki bean</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix web">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/portx1.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Veggies sunt bona vobis</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix photoshop">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/portx1.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Dandelion horseradish</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/portx1.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Dandelion horseradish</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix app">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/portx1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Azuki bean</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix app">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/portx1.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Veggies sunt bona vobis</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>	
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix web">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/portx1.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Dandelion horseradish</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>	
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix photoshop">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/portx1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Azuki bean</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix photoshop">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/portx1.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Veggies sunt bona vobis</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/portx1.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Veggies sunt bona vobis</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>	
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix web">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/portx1.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Dandelion horseradish</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
					<!-- single portfolio item -->
					<li class="mix app">
						<a href="javascript:void(0)" data-largesrc="img/portfolio/portx1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="img/portfolio/portx1.jpg" alt="Meghna">
							<div class="hover-mask">
								<h3>Azuki bean</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<!-- /single portfolio item -->
					
				</ul> <!-- end og grid -->
			</div>  <!-- portfolio items wrapper -->
			
		</section>   <!-- End section -->
		
		
		<!-- Start Team Skills
		=========================================== -->
		
		<section id="team-skills" class="parallax-section">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="500ms">
				
					<!-- section title -->
					<div class="title text-center">
						<h2>Sensus <span class="color">RW 05</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="80">
								<span class="percent"></span>
							</span>
							<h3><i class="fa fa-wordpress"></i> Jumlah Warga</h3>
							<p>Lorem ipsum has erroribus design color vituper bonorum depend you usedcom.bonorum dependan be used.</p>
						</div>
					</div>
					<!-- end skill set -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="90">
								<span class="percent">86</span>
							</span>
							<h3><i class="fa fa-html5"></i> Warga Tetap</h3>
							<p>Lorem ipsum has erroribus design color vituper bonorum depend you usedcom.bonorum dependan be used.</p>
						</div>
					</div>
					<!-- end skill set -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="85">
								<span class="percent"></span>
							</span>
							<h3><i class="fa fa-android"></i> Warga Kontrak</h3>
							<p>Lorem ipsum has erroribus design color vituper bonorum depend you usedcom.bonorum dependan be used.</p>
						</div>
					</div>
					<!-- end skill set -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="70">
								<span class="percent"></span>
							</span>
							<h3><i class="fa fa-apple"></i> Jumlah Rumah</h3>
							<p>Lorem ipsum has erroribus design color vituper bonorum depend you usedcom.bonorum dependan be used.</p>
						</div>
					</div>
					<!-- end skill set -->
					
				</div>  		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!-- Start Our Team
		=========================================== -->
		
		<section id="our-team">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
						<h2>Struktur Organisasi<span class="color"> RW 05</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
                       <article class="team-mate">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/member-1.jpg" alt="Meghna">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Abul Mal Muhit</h3>
								<span>CEO/Founder</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
                           <div class="member-info">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                           </div>
						   <!-- /about member -->
						   
                       </article>
                    </div>
					<!-- end team member -->
					
					<!-- team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                       <article class="team-mate">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/member-1.jpg" alt="Meghna">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Frank Miller</h3>
								<span>Manager</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
                           <div class="member-info">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                           </div>
						   <!-- /about member -->
						</article>
                    </div>
					<!-- end team member -->
					
					<!-- team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                       <article class="team-mate">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/member-1.jpg" alt="Meghna">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Michael Jonson</h3>
								<span>Web Developer</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
                           <div class="member-info">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                           </div>
						   <!-- /about member -->
                       </article>
                    </div>
					<!-- end team member -->
					
					<!-- team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                       <article class="team-mate kill-margin-bottom">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/member-1.jpg" alt="Meghna">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Mo. Kha. Alamgir</h3>
								<span>SEO Specialist</span>
							</div>
							<!-- /member name & designation -->
							
							<!-- about member -->
                           <div class="member-info">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                           </div>
						   <!-- /about member -->
                       </article>
                    </div>
					<!-- end team member -->
					
				</div>  	<!-- End row -->
				<br>
				<br>
				<div class="col-lg-12 text-center">
					<a href="https://twitter.com/amimorshed" title="Follow Us" target="_blank" class="btn btn-transparent wow fadeInUp" data-wow-duration="500ms">Selengkapnya</a>
				</div>
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
			
		
		<!-- Start Testimonial
		=========================================== -->
		
		<section id="testimonial" class="parallax-section">
			<div class="container">
				<div class="row">				
					<div class="col-lg-12">
					
						<!-- section title -->
						<div class="sub-title text-center wow fadeInDown" data-wow-duration="500ms">
							<h3>Yang Mereka Katakan Tentang Kami</h3>
						</div>
						<!-- /section title -->

						<!-- testimonial wrapper -->
						<div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
						
							<!-- testimonial single -->
							<div class="item text-center">
								
								<!-- client photo -->
								<div class="client-thumb">
									<img src="img/team/client.jpg" class="img-responsive" alt="Meghna">
								</div>
								<!-- /client photo -->
								
								<!-- client info -->
								<div class="client-info">
									<div class="client-meta">
										<h3>Abul Mal Muhit</h3>
										<span>Dec 26, 2014</span>
									</div>
									<div class="client-comment">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ex, cupiditate, error, suscipit saepe sed ea consequuntur inventore sequi sit illo.</p>
										<ul class="social-profile">
											<li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /client info -->
							</div>
							<!-- /testimonial single -->
						
							<!-- testimonial single -->
							<div class="item text-center">
								
								<!-- client photo -->
								<div class="client-thumb">
									<img src="img/team/client.jpg" class="img-responsive" alt="Meghna">
								</div>
								<!-- /client photo -->
								
								<!-- client info -->
								<div class="client-info">
									<div class="client-meta">
										<h3>Abul Mal Muhit</h3>
										<span>Dec 26, 2014</span>
									</div>
									<div class="client-comment">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ex, cupiditate, error, suscipit saepe sed ea consequuntur inventore sequi sit illo.</p>
										<ul class="social-profile">
											<li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /client info -->
							</div>
							<!-- /testimonial single -->
						
							<!-- testimonial single -->
							<div class="item text-center">
								
								<!-- client photo -->
								<div class="client-thumb">
									<img src="img/team/client.jpg" class="img-responsive" alt="Meghna">
								</div>
								<!-- /client photo -->
								
								<!-- client info -->
								<div class="client-info">
									<div class="client-meta">
										<h3>Abul Mal Muhit</h3>
										<span>Dec 26, 2014</span>
									</div>
									<div class="client-comment">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, ex, cupiditate, error, suscipit saepe sed ea consequuntur inventore sequi sit illo.</p>
										<ul class="social-profile">
											<li><a href="#"><i class="fa fa-facebook-square fa-lg"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter-square fa-lg"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin-square fa-lg"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /client info -->
							</div>
							<!-- /testimonial single -->
							
						</div>		<!-- end testimonial wrapper -->
					</div> 		<!-- end col lg 12 -->
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
		
		
		<!--
		Start Blog Section
		=========================================== -->
				
		<section id="blog" class="bg-one">
			<div class="container">
				<div class="row">

					<!-- section title -->
					<div class="title text-center wow fadeInDown">
						<h2> Artikel <span class="color">Terbaru</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->

					<div class="clearfix">
					
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
							<div class="note">
								<div class="media-wrapper">
									<img src="img/blog/amazing-caves-coverimage.jpg" alt="amazing caves coverimage" class="img-responsive">
								</div>
								
								<div class="excerpt">
									<h3>Simple Image Post</h3>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
									<a class="btn btn-transparent" href="single-post.html">Read more</a>
								</div>
							</div>						
						</article>
						<!-- /single blog post -->
						
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
							<div class="note">
								<div id="gallery-post" class="media-wrapper">
									<div class="item">
										<img src="img/blog/amazing-caves-coverimage.jpg" alt="amazing caves coverimage" class="img-responsive">
									</div>
									<div class="item">
										<img src="img/blog/bicycle.jpg" alt="Flying bicycle" class="img-responsive">
									</div>
									<div class="item">
										<img src="img/blog/3D-beach-art.jpg" alt="3D Beach Art | Meghna" class="img-responsive">
									</div>
								</div>
								
								<div class="excerpt">
									<h3>Simple Slider Post</h3>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
									<a class="btn btn-transparent" href="single-post.html">Read more</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->
						
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
							<div class="note">
								<div class="media-wrapper">
									<img src="img/blog/amazing-caves-coverimage.jpg" alt="amazing caves coverimage" class="img-responsive">
								</div>
								
								<div class="excerpt">
									<h3>Simple Image Post</h3>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
									<a class="btn btn-transparent" href="single-post.html">Read more</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->
						
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="note kill-margin-bottom">
								<div class="media-wrapper">
									<img src="img/blog/amazing-caves-coverimage.jpg" alt="amazing caves coverimage" class="img-responsive">
								</div>
								<div class="excerpt">
									<h3>Simple Image Post</h3>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
									<a class="btn btn-transparent" href="single-post.html">Read more</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->
					</div>

					<div class="all-post text-center">
						<a class="btn btn-transparent" href="{{ route('blog') }}">Lihat Semua Artikel</a>
					</div>

				</div> <!-- end row -->
			</div> <!-- end container -->
		</section> <!-- end section -->
		
		<!-- Srart Contact Us
		=========================================== -->		
		<section id="contact-us">
			<div class="container">
				<div class="row">
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Kritik <span class="color"> &amp;</span> Saran</h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- Contact Details -->
					<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
						<h3>Detail Kontak</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
						<div class="contact-details">
							<div class="con-info clearfix">
								<i class="fa fa-home fa-lg"></i>
								<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-phone fa-lg"></i>
								<span>Phone: +880-31-000-000</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-fax fa-lg"></i>
								<span>Fax: +880-31-000-000</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-envelope fa-lg"></i>
								<span>Email: hello@meghna.com</span>
							</div>
						</div>
					</div>
					<!-- / End Contact Details -->
						
					<!-- Contact Form -->
					<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
						<form id="contact-form" method="post" action="sendmail.php" role="form">
						
							<div class="form-group">
								<input type="text" placeholder="Nama Lengkap" class="form-control" name="name" id="name">
							</div>
							
							<div class="form-group">
								<input type="email" placeholder="Email" class="form-control" name="email" id="email">
							</div>
							
							<div class="form-group">
								<input type="text" placeholder="Judul" class="form-control" name="subject" id="subject">
							</div>
							
							<div class="form-group">
								<textarea rows="6" placeholder="Pesan" class="form-control" name="message" id="message"></textarea>	
							</div>
							
							<div id="mail-success" class="success">
								Thank you. The Mailman is on His Way :)
							</div>
							
							<div id="mail-fail" class="error">
								Sorry, don't know what happened. Try later :(
							</div>
							
							<div id="cf-submit">
								<input type="submit" id="contact-submit" class="btn btn-transparent" value="Kirim">
							</div>						
							
						</form>
					</div>
					<!-- ./End Contact Form -->
				
				</div> <!-- end row -->
			</div> <!-- end container -->
			
			<!-- Google Map -->
			<div class="google-map wow fadeInDown" data-wow-duration="500ms">
				<div id="map-canvas"></div>
			</div>	
			<!-- /Google Map -->
			
		</section> <!-- end section -->
		
		<!-- end Contact Area
		========================================== -->
		
		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<!--/. End Footer Social Links -->

						<!-- copyright -->
						<div class="copyright text-center">
							<a href="index.html">
								<img src="img/logo-meghna.png" alt="Meghna" /> 
							</a>
							<br />
							
							<p>Design And Developed by <a href="http://www.themefisher.com"> Themefisher Team</a>. Copyright &copy; 2015. All Rights Reserved.</p>
						</div>
						<!-- /copyright -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		

    </body>
</html>
@endsection
@section('ontab')
<script type="text/javascript">
    $(document).ready(function(){
        $('.menu').removeClass('current')
        $('#Home').addClass('current')
    })
</script>
@endsection