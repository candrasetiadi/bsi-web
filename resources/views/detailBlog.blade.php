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
									
									<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra, vel varius eget sit mollis. Commodo enim aliquam suspendisse tortor cum diam, commodo facilisis, rutrum et duis nisl porttitor, vel eleifend odio ultricies ut, orci in adipiscing felis velit nibh. Consectetuer porttitor feugiat vestibulum sit feugiat, voluptates dui eros libero. Etiam vestibulum at lectus. Donec vivamus. Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus. Ultrices lacus proin conubia dictum tempus,</p>
								
									<blockquote>
										<p>Vulputate mi dui suscipit, molestie vulputate libero fusce iaculis suscipit. Sapien pede libero. Maecenas lacus aliquet et nisl nunc, per sed sed maecenas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismodiani tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
									</blockquote>
									
									<p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse, aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra, vel varius eget sit mollis. Commodo enim aliquam suspendisse tortor cum diam, commodo facilisis, rutrum et duis nisl porttitor, vel eleifend odio ultricies ut, orci in adipiscing felis velit nibh. Consectetuer porttitor feugiat vestibulum sit feugiat, voluptates dui eros libero. Etiam vestibulum at lectus. Donec vivamus. Vel donec et scelerisque</p>

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
							
                            <div class="next-prev clearfix">
                                <a href="" class="prev-post">
                                    <i class="fa fa-angle-left fa-2x"></i>Previous Post
                                </a>
                                <a href="" class="next-post pull-right">
                                    Next Post<i class="fa fa-angle-right fa-2x"></i>
                                </a>
                            </div>
                            <div class="author-about clearfix">
                                <h4>About Jhon Doe</h4>
                                <div class="post-author pull-left">
                                    <img src="img/blog/avatar.png" alt="">
                                </div>
                                <div class="author-bio">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt.</p>
                                    <h5>Follow The Author</h5>
									<div class="social-profile">
										<ul>
											<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
										</ul>
									</div>
                                </div>
                                
                            </div>
                            
                            <div id="comments" class="comments-section">
                                <h4>4 Comments</h4>
                                <ol class="comment-list">
                                    <li id="comment-1">
                                        <div class="comment-wrap">
                                            <div class="author-avatar pull-left">
                                                <img src="img/blog/user.jpg" alt="">
                                            </div>
                                            <div class="author-comment">
                                                <cite class="pull-left"><a href="#">Smithson</a></cite>
                                                <a href="" class="replay pull-right">Replay</a>
                                                <div style="clear:both"></div>
                                                <div class="comment-meta">
                                                    <i class="fa fa-calendar"></i> 26 aug 2013 at 07:30 PM 
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, repellendus. Culpa nam aut vel. Ab, excepturi minus, quasi debitis quaerat animi, enim quod repellat minima dolores facere veniam quam quo!</p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li id="comment-2">
                                                <div class="comment-wrap">
                                                    <div class="author-avatar pull-left">
                                                        <img src="img/blog/user.jpg" alt="">
                                                    </div>
                                                    <div class="author-comment">
                                                        <cite class="pull-left"><a href="#">Smithson</a></cite>
                                                        <a href="" class="replay pull-right">Replay</a>
                                                        <div style="clear:both"></div>
                                                        <div class="comment-meta">
                                                            <i class="fa fa-calendar"></i> 26 aug 2013 at 07:30 PM 
                                                        </div>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, repellendus. Culpa nam aut vel. Ab, excepturi minus, quasi debitis quaerat animi, enim quod repellat minima dolores facere veniam quam quo!</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li id="comment-3">
                                                <div class="comment-wrap">
                                                    <div class="author-avatar pull-left">
                                                        <img src="img/blog/user.jpg" alt="">
                                                    </div>
                                                    <div class="author-comment">
                                                        <cite class="pull-left"><a href="#">Smithson</a></cite>
                                                        <a href="" class="replay pull-right">Replay</a>
                                                        <div style="clear:both"></div>
                                                        <div class="comment-meta">
                                                            <i class="fa fa-calendar"></i> 26 aug 2013 at 07:30 PM 
                                                        </div>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, repellendus. Culpa nam aut vel. Ab, excepturi minus, quasi debitis quaerat animi, enim quod repellat minima dolores facere veniam quam quo!</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="comment-wrap">
                                            <div class="author-avatar pull-left">
                                                <img src="img/blog/user.jpg" alt="">
                                            </div>
                                            <div class="author-comment">
                                                <cite class="pull-left"><a href="#">Smithson</a></cite>
                                                <a href="" class="replay pull-right">Replay</a>
                                                <div style="clear:both"></div>
                                                <div class="comment-meta">
                                                    <i class="fa fa-calendar"></i> 26 aug 2013 at 07:30 PM 
                                                </div>
                                            </div>
                                            <div class="comment-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, repellendus. Culpa nam aut vel. Ab, excepturi minus, quasi debitis quaerat animi, enim quod repellat minima dolores facere veniam quam quo!</p>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            
                            <div class="comment-reply-form">
                               <h3>Leave a Replay</h3>
                                <form id="comment-form" method="post" action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name *" id="name" name="name" required>
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-mail *" id="email" name="email" required>
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Website" id="website" name="website">
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Message *" id="message" name="message" rows="5" cols="5" required></textarea>
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <input type="submit" id="post-comment" value="Post Comment" class="btn btn-transparent">
                                    </div>
                                    <!-- End .form-group -->
                                </form>
                            </div>
                            <!-- End Single Post -->

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
                        <aside class="widget wow fadeInDown">
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