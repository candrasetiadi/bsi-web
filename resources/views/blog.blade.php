@extends('layouts.default')
@section('content')
<body class="blog-page">
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
        Fixed Navigation
        ==================================== -->
       {{--<!-- @include('layouts.navigation') -->--}}
       <header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <h1 id="logo">
                            <a href="{{ route('home') }}">
                            <img src="img/logo-meghna.png" alt="Meghna" />
                            </a>
                        </h1>
                    </a>
                </div>
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current menu" id="Home"><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ url('/#about') }}">Tentang Kami</a></li>
                        <li><a href="{{ url('/#services') }}">Pelayanan Umum</a></li>
                        <li><a href="{{ url('/#showcase') }}">Fasilitas Umum</a></li>
                        <li><a href="{{ url('/#our-team') }}">Struktur RW</a></li>
                        <li><a href="{{ url('/#pricing') }}">Informasi</a></li>
                        <li class="menu" id="Blog"><a href="{{ route('blog') }}">Artikel</a></li>
                        <li><a href="{{ url('/#contact-us') }}">Hubungi Kami</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
        
        
        <!-- Start Blog Banner
        ==================================== -->
        <section id="blog-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       
                        <div class="blog-icon">
                            <i class="fa fa-book fa-4x"></i>
                        </div>
                        <div class="blog-title">
                            <h1>Welcome to Our Blog</h1>
                        </div>
                        
					</div>     <!-- End col-lg-12 -->
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->

        <!-- Start Blog Post Section
        ==================================== -->
        <section id="blog-page">
            <div class="container">
                <div class="row">
                   
                    <div id="blog-posts" class="col-md-8 col-sm-8">
                        <div class="post-item">
                           
                           <!-- Single Post -->
                            <article class="entry wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="300ms">
                               
                                <div class="post-thumb">
                                    <a href="single-post.html">
										<img src="img/blog/3D-beach-art.jpg" alt="3D Beach Art | Meghna" class="img-responsive">
									</a>
                                </div>
								<div class="post-excerpt">
									<h3><a href="single-post.html">Post with featured image</a></h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat?</p>
									<a class="btn btn-transparent" href="{{ route('detailBlog')}}">Read more</a>
								</div>
								<div class="post-meta">
									<span class="post-date">
										<i class="fa fa-calendar"></i>30 jun 2014
									</span>
									<span class="comments">
										<i class="fa fa-comments"></i>18 Comments
									</span>
									<span class="post-view">
										<i class="fa fa-eye"></i>265 Views
									</span>
									<span class="author">
										<i class="fa fa-user"></i><a href="#">Admin</a>
									</span>
									<span class="post-tags">
										<i class="fa fa-tags"></i><a href="#">Web Design</a>, <a href="#">Development</a>
									</span>
								</div>
                            </article>
                            <!-- End Single Post -->
                           
                           <!-- Single Post -->
                            <article class="entry wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="300ms">

								<div id="post-thumb" class="post-thumb">
									<div class="item">
										<img src="img/blog/bicycle.jpg" alt="Flying bicycle" class="img-responsive">
									</div>
									<div class="item">
										<img src="img/blog/3D-beach-art.jpg" alt="3D Beach Art | Meghna" class="img-responsive">
									</div>
								</div>

                                <div class="post-excerpt">
									<h3><a href="single-post.html">Post with image slider</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat?</p>
                                    <a class="btn btn-transparent" href="single-post.html">Read more</a>
                                </div>
								
                                <div class="post-meta">
                                    <span class="post-date">
                                        <i class="fa fa-calendar"></i>30 jun 2014
                                    </span>
                                    <span class="comments">
                                        <i class="fa fa-comments"></i>18 Comments
                                    </span>
                                    <span class="post-view">
                                        <i class="fa fa-eye"></i>265 Views
                                    </span>
                                    <span class="author">
                                        <i class="fa fa-user"></i><a href="#">Admin</a>
                                    </span>
                                    <span class="post-tags">
                                        <i class="fa fa-tags"></i><a href="#">Web Design</a>, <a href="#">Development</a>
                                    </span>
                                </div>
                            </article>
                            <!-- End Single Post -->
                           
                           <!-- Single Post -->
                            <article class="entry wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="media-wrapper">
                                    <iframe src="http://www.youtube.com/embed/6E_Lav_N-Ho" allowfullscreen></iframe>
                                </div>
								
                                <div class="post-excerpt">
                                    <h3><a href="single-post.html">Post with Youtube Video</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat?</p>
                                    <a class="btn btn-transparent" href="single-post.html">Read more</a>
                                </div>
                                
                                <div class="post-meta">
                                    <span class="post-date">
                                        <i class="fa fa-calendar"></i>30 jun 2014
                                    </span>
                                    <span class="comments">
                                        <i class="fa fa-comments"></i>18 Comments
                                    </span>
                                    <span class="post-view">
                                        <i class="fa fa-eye"></i>265 Views
                                    </span>
                                    <span class="author">
                                        <i class="fa fa-user"></i><a href="#">Admin</a>
                                    </span>
                                    <span class="post-tags">
                                        <i class="fa fa-tags"></i><a href="#">Web Design</a>, <a href="#">Development</a>
                                    </span>
                                </div>
								
                            </article>
                            <!-- End Single Post -->
                           
                           <!-- Single Post -->
                            <article class="entry wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="media-wrapper">
                                    <iframe width="100%" style="height:160px" scrolling="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/73596440&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                                </div>

                                <div class="post-excerpt">
                                    <h3><a href="single-post.html">Post with Sound clip</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat?</p>
                                    <a class="btn btn-transparent" href="single-post.html">Read more</a>
                                </div>

                                <div class="post-meta">
                                    <span class="post-date">
                                        <i class="fa fa-calendar"></i>30 jun 2014
                                    </span>
                                    <span class="comments">
                                        <i class="fa fa-comments"></i>18 Comments
                                    </span>
                                    <span class="post-view">
                                        <i class="fa fa-eye"></i>265 Views
                                    </span>
                                    <span class="author">
                                        <i class="fa fa-user"></i><a href="#">Admin</a>
                                    </span>
                                    <span class="post-tags">
                                        <i class="fa fa-tags"></i><a href="#">Web Design</a>, <a href="#">Development</a>
                                    </span>
                                </div>
								
                            </article>
                            <!-- End Single Post -->
                           
                           <!-- Single Post -->
                            <article class="entry wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="post-excerpt">
                                    <h3><a href="single-post.html">Post with out media</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat?</p>
                                    <a class="btn btn-transparent" href="single-post.html">Read more</a>
                                </div>
                                <div class="post-meta">
                                    <span class="post-date">
                                        <i class="fa fa-calendar"></i>30 jun 2014
                                    </span>
                                    <span class="comments">
                                        <i class="fa fa-comments"></i>18 Comments
                                    </span>
                                    <span class="post-view">
                                        <i class="fa fa-eye"></i>265 Views
                                    </span>
                                    <span class="author">
                                        <i class="fa fa-user"></i><a href="#">Admin</a>
                                    </span>
                                    <span class="post-tags">
                                        <i class="fa fa-tags"></i><a href="#">Web Design</a>, <a href="#">Development</a>
                                    </span>
                                </div>
                            </article>
                            <!-- End Single Post -->
                               
                            <nav class="post-pagination wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="300ms">
                                <ul>
                                    <li class="disabled"><a href="#">&laquo;</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a href="#">11</a></li>
                                    <li><a href="#">12</a></li>
                                    <li><a href="#">13</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    <!-- Widget Section -->
                    <div id="right-sidebar" class="col-md-4 col-sm-4">
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInUp"  data-wow-duration="1000ms">
							<div class="widget-title">
                               <h3>Search</h3>
							</div>
                           <div class="widget-content">
                                <form action="#" id="search-form" method="get" role="search">
                                    <input type="text" class="form-control" placeholder="Search..." autocomplete="on" name="seach">
                                    <button type="submit" title="Search" id="search-submit">
										<i class="fa fa-search"></i>
									</button>
                                </form>
                           </div>
                        </aside>
                        <!-- End Single Widget -->
						
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">
							<div class="widget-title">
                               <h3>Text Widget</h3>
							</div>
							<div class="widget-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ducimus in dolorum accusantium voluptate nostrum, excepturi dolores voluptatem vel rerum at, recusandae inventore nobis ex eveniet sunt eligendi, qui provident.</p>
							</div>
                        </aside>
                        <!-- End Single Widget -->
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInUp">
							<div class="widget-title">
								<h3>Tab	 Widget</h3>
							</div>
								
							<div class="widget-content">
								<!-- tab nav -->
								<ul class="tab-post-nav clearfix">
									<li class="active"><a href="#popular" data-toggle="tab">Popular Post</a></li>
									<li><a href="#recent" data-toggle="tab">Recent Post</a></li>
									<li><a href="#most-viewed" data-toggle="tab">Most Viewed</a></li>
								</ul>
								<!-- /tab nav -->
								
								<!-- tab content -->
								<div class="tab-content">
									<article class="tab-pane active tab-post" id="popular">
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="img/blog/3D-beach-art.jpg" class="img-responsive" alt="3D Beach Art | Meghna">
											</div>
											<div class="tab-excerpt">
												<h4><a href="single.html">Post Title Demo</a></h4>
												<span>November 15 2014</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>
											</div>
										</div>
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="img/blog/amazing-caves-coverimage.jpg" class="img-responsive" alt="amazing-caves-coverimage | Meghna">
											</div>
											<div class="tab-excerpt">
												<h4><a href="single.html">Post Title Demo</a></h4>
												<span>November 15 2014</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>
											</div>
										</div>
									</article>
									
									<article class="tab-pane tab-post" id="recent">
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="img/blog/amazing-caves-coverimage.jpg" class="img-responsive" alt="amazing-caves-coverimage | Meghna">
											</div>
											<div class="tab-excerpt">
												<h4><a href="single.html">Post Title Demo</a></h4>
												<span>November 15 2014</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>
											</div>
										</div>
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="img/blog/3D-beach-art.jpg" class="img-responsive" alt="3D Beach Art | Meghna">
											</div>
											<div class="tab-excerpt">
												<h4><a href="single.html">Post Title Demo</a></h4>
												<span>November 15 2014</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>
											</div>
										</div>
									</article>	
									
									<article class="tab-pane tab-post" id="most-viewed">
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="img/blog/bicycle.jpg" class="img-responsive" alt="bicycle | Meghna">
											</div>
											<div class="tab-excerpt">
												<h4><a href="single.html">Post Title Demo</a></h4>
												<span>November 15 2014</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>
											</div>
										</div>
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="img/blog/3D-beach-art.jpg" class="img-responsive" alt="3D Beach Art | Meghna">
											</div>
											<div class="tab-excerpt">
												<h4><a href="single.html">Post Title Demo</a></h4>
												<span>November 15 2014</span>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>
											</div>
										</div>
									</article>									
									
								</div>
								<!-- /tab content -->
								
							</div>
                        </aside>
                        <!-- End Single Widget -->
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">
							<div class="widget-title">
                               <h3>Newsletter</h3>
                               <p>Signup to receive email updates and to hear what's going on with my blog!</p>
							</div>
							<div class="widget-content">
                                <form action="">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required="">
                                    <input type="submit" value="Subscribe" class="btn btn-transparent">
                                </form>
							</div>
                        </aside>
                        <!-- End Single Widget -->
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">
							<div class="widget-title">
                               <h3>Categories</h3>
							</div>
							<div class="widget-content">
                                <ul class="categories">
                                    <li><i class="fa fa-plus"></i> <a href="#">Marketing Policy</a></li>
                                    <li><i class="fa fa-plus"></i> <a href="#">Business Strategy</a></li>
                                    <li><i class="fa fa-plus"></i> <a href="#">Web Research</a></li>
                                    <li><i class="fa fa-plus"></i> <a href="#">Web Development</a></li>
                                    <li><i class="fa fa-plus"></i> <a href="#">Business Model</a></li>
                                </ul>
							</div>
                        </aside>
                        <!-- End Single Widget -->
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">
							<div class="widget-title">
                               <h3>Tag Cloud</h3>
							</div>
							<div class="widget-content">
                                <a class="tag" href="#">Mobile</a>
                                <a class="tag" href="#">Web</a>
                                <a class="tag" href="#">Electronics</a>
                                <a class="tag" href="#">SEO</a>
                                <a class="tag" href="#">Business Story</a>
                                <a class="tag" href="#">Post Query</a>
                                <a class="tag" href="#">HTML5</a>
                                <a class="tag" href="#">CSS3</a>
                                <a class="tag" href="#">jQuery</a>
                                <a class="tag" href="#">Javascript</a>
							</div>
                        </aside>
                        <!-- End Single Widget -->
                        
                    </div>
                    <!-- End Widget Section -->

				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        

		<!-- Start Footer Section
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
							<img src="img/logo-meghna.png" alt="Meghna" /> <br />
							<p>Copyright &copy; 2014. All Rights Reserved.</p>
						</div>
						<!-- /copyright -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->
		
		<!-- Back to Top
		============================== -->
		<a href="#" id="scrollUp"><i class="fa fa-angle-up fa-2x"></i></a>
		
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
</body>
@endsection
@section('ontab')
<script type="text/javascript">
    $(document).ready(function(){
        $('.menu').removeClass('current')
        $('#Blog').addClass('current')
    })
</script>
@endsection