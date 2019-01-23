		<body>
		<div id="body_hider" class="hider_flag"></div>
		<div id="body_hider_full" class="hider_flag"></div>
		<div class="hidden-bar desktop-panel">
			<div class="hidden-bar-inner">
				<div id="hidden-bar-logo" class="hidden-bar-logo">
					<a href="<?php echo base_url(); ?>pages/view"><img src="<?php echo base_url(); ?>assets/images/logo_sidebar.png" alt="" /></a>
				</div>
				<div class="widget mb-5 text-center">
					<p class="mb-0">SETTINGS</p><br>
					<!-- <form  action="<?php echo base_url();?>pages/change_color_theme/colorvalue" method="post"> -->
						<script type="text/javascript"></script>
						<a href="<?php echo base_url();?>pages/change_color_theme/0">
							<p>Light</p>
						</a>
						<a href="<?php echo base_url();?>pages/change_color_theme/1">
							<p>Dark</p>
						</a>
						<!-- <input type="submit" value="Change" name="submit">
         		    </form> -->
				</div>
				<div class="widget mb-5 text-center">
					<p class="mb-0">River Street, Blue Building, 1st. floor</p>
					<p>5690-970 New york City</p>
				</div>
				<div class="widget">
					<div class="widget-title-wrapper">
						<div class="widget-title">
							GET CONNECTED
							<div class="simple-line"></div>
						</div>
						<div class="simple-line"></div>
					</div>
					<div class="widget-social text-center">
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-flickr"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-pinterest-square"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-vimeo-square"></i></a>
						<a href="#"><i class="fa fa-rss"></i></a>
					</div>
				</div>
				<div class="widget">
					<div class="widget-title-wrapper">
						<div class="widget-title">
							GALLERY
							<div class="simple-line"></div>
						</div>
						<div class="simple-line"></div>
					</div>
					<div class="widget-gallery">
						<a href="<?php echo base_url(); ?>assets/images/gallery/gallery_1.jpg" class="mfp-image gallery-item">
							<img src="<?php echo base_url(); ?>assets/images/gallery/thumb/gallery_1.jpg" alt="" />
						</a>
						<a href="<?php echo base_url(); ?>assets/images/gallery/gallery_2.jpg" class="mfp-image gallery-item">
							<img src="<?php echo base_url(); ?>assets/images/gallery/thumb/gallery_2.jpg" alt="" />
						</a>
						<a href="<?php echo base_url(); ?>assets/images/gallery/gallery_3.jpg" class="mfp-image gallery-item">
							<img src="<?php echo base_url(); ?>assets/images/gallery/thumb/gallery_3.jpg" alt="" />
						</a>
						<a href="<?php echo base_url(); ?>assets/images/gallery/gallery_4.jpg" class="mfp-image gallery-item">
							<img src="<?php echo base_url(); ?>assets/images/gallery/thumb/gallery_4.jpg" alt="" />
						</a>
						<a href="<?php echo base_url(); ?>assets/images/gallery/gallery_5.jpg" class="mfp-image gallery-item">
							<img src="<?php echo base_url(); ?>assets/images/gallery/thumb/gallery_5.jpg" alt="" />
						</a>
						<a href="<?php echo base_url(); ?>assets/images/gallery/gallery_6.jpg" class="mfp-image gallery-item">
							<img src="<?php echo base_url(); ?>assets/images/gallery/thumb/gallery_6.jpg" alt="" />
						</a>
					</div>
				</div>
				<div class="widget">
					<div class="widget-title-wrapper">
						<div class="widget-title">
							THEME AD WIDGET
							<div class="simple-line"></div>
						</div>
						<div class="simple-line"></div>
					</div>
					<div class="widget-ads text-center">
						<a href="#"><img src="<?php echo base_url(); ?>assets/images/advertise-aside.jpg" alt="" /></a>
					</div>
				</div>
			</div>
		</div>
		<div class="hidden-bar mobile-panel">
			<div class="hidden-bar-inner">
				<div id="hidden-bar-logo-2" class="hidden-bar-logo">
					<a href="<?php echo base_url(); ?>pages/view"><img src="<?php echo base_url(); ?>assets/images/logo_mobile.svg" alt="" /></a>
				</div>
				<div class="mobile-menu">
					<ul class="nav-collapse navbar-nav">
						<li>
							<a href="<?php echo base_url(); ?>pages/view/home">Home <i class="fa fa-circle"></i></a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>pages/about/aboutus">About me<i class="fa fa-angle-down"></i></a>
							
						</li>
						<li>
							<a href="#">Categories <i class="fa fa-angle-down"></i></a>
							
							   
								<ul class="sub-menu">
								<?php foreach ($categories as $row): ?>    
									<li><a href="<?php echo base_url(); ?>pages/story_category_posts/<?php echo $row->category_id; ?>"><?php echo $row->category; ?></a></li>
								<?php endforeach; ?>	
								</ul>

						</li>
					
											<li><a href="<?php echo base_url(); ?>pages/contact/contactus">Get in touch</a></li>
						<li>
							<a href="#">Shop Online <i class="fa fa-angle-down"></i></a>
							<ul class="sub-menu">
								<li><a href="shop.html">Shop</a></li>
								<li><a href="shop-detail.html">Single Product</a></li>
								<li><a href="cart-empty.html">Empty Cart</a></li>
								<li><a href="cart.html">Cart</a></li>
								<li><a href="checkout.html">Checkout</a></li>
								<li><a href="my-account.html">My account</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url();?>pages/login">login</a></li> <i class="fa fa-angle-down"></i> <li><a href="<?php echo base_url();?>posts/write">Write Something</a></li><i class="fa fa-angle-down"></i>
						<li><a href="<?php echo base_url(); ?>pages/logout">Logout</a></li>
					</ul>
				</div>
				<div class="simple-line mt-2 mb-2"></div>
				<div class="widget">
					<div class="widget-title-wrapper">
						<div class="widget-title white">
							GET CONNECTED
						</div>
					</div>
					<div class="widget-social text-center">
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-flickr"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-pinterest-square"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-vimeo-square"></i></a>
						<a href="#"><i class="fa fa-rss"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="site">
			<div class="topbar lato">
			</div>
			<header class="header header-sticky">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="sticky-side-menu">
								<div class="sidebar-trigger hidden-bar-toggle">
									<div class="line line-1"></div>
									<div class="line line-2"></div>
									<div class="line line-3"></div>
								</div>
							</div>
								<div class="sticky-menu">
								<div class="main-menu">
									<div class="main-menu-inner">
										<ul class="nav-collapse navbar-nav">
											<li>
												<a href="<?php echo base_url(); ?>pages/view/home">Home <i class="fa fa-circle"></i></a>
											</li>
											<li>
												<li>
							                       <a href="<?php echo base_url(); ?>pages/about/aboutus">About me<i class="fa fa-angle-down"></i></a>
							                                 <ul class="sub-menu">
								                              <li><a href="<?php echo base_url(); ?>pages/about/aboutus">About me</a></li>
							                                 </ul>
						                         </li>
											</li>
											<li>
												<a href="#">Categories <i class="fa fa-angle-down"></i></a>
												<ul class="sub-menu">
				                            	  <?php foreach ($categories as $row): ?>
													<li><a href="<?php echo base_url(); ?>pages/story_category_posts/<?php echo $row->category_id; ?>"><?php echo $row->category; ?></a></li>
													<?php endforeach; ?>
												</ul>
											</li>
											<li><a href="<?php echo base_url(); ?>pages/contact/contactus">Get in touch</a></li>
											<li>
												<a href="#">Shop Online <i class="fa fa-angle-down"></i></a>
												<ul class="sub-menu">
													<li><a href="shop.html">Shop</a></li>
													<li><a href="shop-detail.html">Single Product</a></li>
													<li><a href="cart-empty.html">Empty Cart</a></li>
													<li><a href="cart.html">Cart</a></li>
													<li><a href="checkout.html">Checkout</a></li>
													<li><a href="my-account.html">My account</a></li>
												</ul>
											</li>
											<li><a href="<?php echo base_url();?>pages/login">login</a></li>  <li><a href="<?php echo base_url();?>posts/write">Write Something</a></li>
											<li><a href="<?php echo base_url(); ?>pages/logout">Logout</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<header class="header header-desktop">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3 hidden-sm hidden-xs pl-4">
							<div class="menu-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-xing"></i></a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div id="logo" class="text-center text-left-sm">
								<a href="<?php echo base_url(); ?>pages/view">
									<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo" />
								</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 pr-4">
							<div class="side-menu">
								<div class="sidebar-trigger hidden-bar-toggle">
									<div class="line line-1"></div>
									<div class="line line-2"></div>
									<div class="line line-3"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 p-0">
							<div class="main-menu">
								<div class="main-menu-inner">
									<ul class="nav-collapse navbar-nav">
						<li>
							<a href="<?php echo base_url(); ?>pages/view/home">Home <i class="fa fa-circle"></i></a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>pages/about/aboutus">About me<i class="fa fa-angle-down"></i></a>
							
						</li>
						<li>
							<a href="#">Categories <i class="fa fa-angle-down"></i></a>
							<ul class="sub-menu">
                              <?php foreach ($categories as $row): ?>                            
								<li><a href="<?php echo base_url(); ?>pages/story_category_posts/<?php echo $row->category_id; ?>"><?php echo $row->category; ?></a></li>
							<?php endforeach; ?>
							</ul>
						</li>
						<li><a href="<?php echo base_url(); ?>pages/contact/contactus">Get in touch</a></li>
						<li>
							<a href="#">Shop Online <i class="fa fa-angle-down"></i></a>
							<ul class="sub-menu">
								<li><a href="shop.html">Shop</a></li>
								<li><a href="shop-detail.html">Single Product</a></li>
								<li><a href="cart-empty.html">Empty Cart</a></li>
								<li><a href="cart.html">Cart</a></li>
								<li><a href="checkout.html">Checkout</a></li>
								<li><a href="my-account.html">My account</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url();?>pages/login">login</a></li>  <li><a href="<?php echo base_url();?>posts/write">Write Something</a></li>
						<li><a href="<?php echo base_url(); ?>pages/logout">Logout</a></li>
					</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div id="main">
				<div class="section mt-7">
					<div class="container">
						<div class="row">
							<div class="col-sm-8">
								<div class="blog-list style-3">
									<div class="blog-item mb-6">
										<div class="blog-inner">
											<div class="col-md-5">
												<a href="blog-detail.html" class="featured-image">
													<div class="overlay"><i class="mdi-link-variant"></i></div>
													<img src="<?php echo base_url(); ?>assets/images/blog/blog_6.jpg" alt="" />
												</a>
											</div>
											<div class="col-md-7">
												<div class="info">
													<div class="tags">
														<a href="#">Free Your Mind</a>, <a href="#">LifeStyle</a>
													</div>
													<div class="title">
														<a href="blog-detail.html">Getting Things Right</a>
													</div>
													<div class="text">
														<p> The steamer which crossed the Pacific from Yokohama to San Francisco made a direct connection with that from Hong Kong, and it could not sail until the latter reached …</p>
														<a href="<?php echo base_url(); ?>pages/reading/readinginterface.php" class="button small">Read more</a>
													</div>
												</div>
												<div class="info-bottom">
													<div class="date">April 05, 2018</div>
													<div class="share">
														<a href="#"><i class="fa fa-facebook"></i></a>
														<a href="#"><i class="fa fa-pinterest"></i></a>
														<a href="#"><i class="fa fa-twitter"></i></a>
														<a href="#"><i class="fa fa-google-plus"></i></a>
													</div>
													<div class="comment">
														<a href="#">4 Comments</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="blog-item mb-6">
										<div class="blog-inner">
											<div class="col-md-5">
												<a href="blog-detail.html" class="featured-image">
													<div class="overlay"><i class="mdi-link-variant"></i></div>
													<img src="<?php echo base_url(); ?>assets/images/blog/blog_7.jpg" alt="" />
												</a>
											</div>
											<div class="col-md-7">
												<div class="info">
													<div class="tags">
														<a href="#">Free Your Mind</a>, <a href="#">LifeStyle</a>
													</div>
													<div class="title">
														<a href="blog-detail.html">Back For Good</a>
													</div>
													<div class="text">
														<p> The steamer which crossed the Pacific from Yokohama to San Francisco made a direct connection with that from Hong Kong, and it could not sail until the latter reached …</p>
														<a href="<?php echo base_url(); ?>pages/reading/readinginterface.php" class="button small">Read more</a>
													</div>
												</div>
												<div class="info-bottom">
													<div class="date">April 05, 2018</div>
													<div class="share">
														<a href="#"><i class="fa fa-facebook"></i></a>
														<a href="#"><i class="fa fa-pinterest"></i></a>
														<a href="#"><i class="fa fa-twitter"></i></a>
														<a href="#"><i class="fa fa-google-plus"></i></a>
													</div>
													<div class="comment">
														<a href="#">4 Comments</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="blog-item mb-6">
										<div class="blog-inner">
											<div class="col-md-5">
												<a href="blog-detail.html" class="featured-image">
													<div class="overlay"><i class="mdi-link-variant"></i></div>
													<img src="<?php echo base_url(); ?>assets/images/blog/blog_8.jpg" alt="" />
												</a>
											</div>
											<div class="col-md-7">
												<div class="info">
													<div class="tags">
														<a href="#">Free Your Mind</a>, <a href="#">LifeStyle</a>
													</div>
													<div class="title">
														<a href="blog-detail.html">Going With The Flow</a>
													</div>
													<div class="text">
														<p> The steamer which crossed the Pacific from Yokohama to San Francisco made a direct connection with that from Hong Kong, and it could not sail until the latter reached …</p>
														<a href="<?php echo base_url(); ?>pages/reading/readinginterface.php" class="button small">Read more</a>
													</div>
												</div>
												<div class="info-bottom">
													<div class="date">April 05, 2018</div>
													<div class="share">
														<a href="#"><i class="fa fa-facebook"></i></a>
														<a href="#"><i class="fa fa-pinterest"></i></a>
														<a href="#"><i class="fa fa-twitter"></i></a>
														<a href="#"><i class="fa fa-google-plus"></i></a>
													</div>
													<div class="comment">
														<a href="#">4 Comments</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="blog-item mb-6">
										<div class="blog-inner">
											<div class="col-md-5">
												<a href="blog-detail.html" class="featured-image">
													<div class="overlay"><i class="mdi-link-variant"></i></div>
													<img src="<?php echo base_url(); ?>assets/images/blog/blog_9.jpg" alt="" />
												</a>
											</div>
											<div class="col-md-7">
												<div class="info">
													<div class="tags">
														<a href="#">Free Your Mind</a>, <a href="#">LifeStyle</a>
													</div>
													<div class="title">
														<a href="blog-detail.html">Benefits Of Early Rising</a>
													</div>
													<div class="text">
														<p> The steamer which crossed the Pacific from Yokohama to San Francisco made a direct connection with that from Hong Kong, and it could not sail until the latter reached …</p>
														<a href="<?php echo base_url(); ?>pages/reading/readinginterface.php" class="button small">Read more</a>
													</div>
												</div>
												<div class="info-bottom">
													<div class="date">April 05, 2018</div>
													<div class="share">
														<a href="#"><i class="fa fa-facebook"></i></a>
														<a href="#"><i class="fa fa-pinterest"></i></a>
														<a href="#"><i class="fa fa-twitter"></i></a>
														<a href="#"><i class="fa fa-google-plus"></i></a>
													</div>
													<div class="comment">
														<a href="#">4 Comments</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="blog-item mb-6">
										<div class="blog-inner">
											<div class="col-md-5">
												<a href="blog-detail.html" class="featured-image">
													<div class="overlay"><i class="mdi-link-variant"></i></div>
													<img src="<?php echo base_url(); ?>assets/images/blog/blog_10.jpg" alt="" />
												</a>
											</div>
											<div class="col-md-7">
												<div class="info">
													<div class="tags">
														<a href="#">Free Your Mind</a>, <a href="#">LifeStyle</a>
													</div>
													<div class="title">
														<a href="blog-detail.html">The Newest Spot</a>
													</div>
													<div class="text">
														<p> The steamer which crossed the Pacific from Yokohama to San Francisco made a direct connection with that from Hong Kong, and it could not sail until the latter reached …</p>
														<a href="<?php echo base_url(); ?>pages/reading/readinginterface.php" class="button small">Read more</a>
													</div>
												</div>
												<div class="info-bottom">
													<div class="date">April 05, 2018</div>
													<div class="share">
														<a href="#"><i class="fa fa-facebook"></i></a>
														<a href="#"><i class="fa fa-pinterest"></i></a>
														<a href="#"><i class="fa fa-twitter"></i></a>
														<a href="#"><i class="fa fa-google-plus"></i></a>
													</div>
													<div class="comment">
														<a href="#">4 Comments</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="pagination">
									<ul class="page-numbers">
										<li><a class="prev page-numbers" href="#"><i class="mdi-chevron-double-left"></i></a></li>
										<li><a class="page-numbers" href="#">1</a></li>
										<li><span class="page-numbers current">2</span></li>
										<li><a class="page-numbers" href="#">3</a></li>
										<li><a class="next page-numbers" href="#"><i class="mdi-chevron-double-right"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="widget">
									<div class="widget-title-wrapper">
										<div class="widget-title">
											ABOUT ME
											<div class="simple-line"></div>
										</div>
										<div class="simple-line"></div>
									</div>
									<div class="vcard text-center">
										<img src="<?php echo base_url(); ?>assets/images/vcard.jpg" alt="" />
										<div class="mb-1"></div>
										<p>Beyond the pit stood the little wedge of people with the white flag at its apex, arrested by these wonders.</p>
										<div class="shout-svg">
											<img src="<?php echo base_url(); ?>assets/images/signature.jpg" alt="" />
										</div>
									</div>
								</div>
								<div class="widget">
									<div class="widget-title-wrapper">
										<div class="widget-title">
											GET CONNECTED
											<div class="simple-line"></div>
										</div>
										<div class="simple-line"></div>
									</div>
									<div class="widget-social text-center">
										<a href="#"><i class="fa fa-dribbble"></i></a>
										<a href="#"><i class="fa fa-flickr"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-pinterest-square"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-vimeo-square"></i></a>
										<a href="#"><i class="fa fa-rss"></i></a>
									</div>
								</div>
								<div class="widget">
									<div class="widget-title-wrapper">
										<div class="widget-title">
											RECENT POSTS
											<div class="simple-line"></div>
										</div>
										<div class="simple-line"></div>
									</div>
									<div class="widget-recent-post">
										<ul>
											<li>
												<div class="featured">
													<a href="blog-detail.html">
														<img src="<?php echo base_url(); ?>assets/images/blog/thumb/blog_1.jpg" alt="" />
													</a>
												</div>
												<div class="content">
													<h6 class="title">
														<a href="blog-detail.html">We Love Blogging</a>
													</h6>
													<div class="info">
														<div class="date">May 31, 2017</div>
														<div class="excerpt">The steamer which crossed the Pacific from Yokohama to San Francisco made a …</div>
													</div>
												</div>
											</li>
											<li>
												<div class="featured">
													<a href="blog-detail.html">
														<img src="<?php echo base_url(); ?>assets/images/blog/thumb/blog_2.jpg" alt="" />
													</a>
												</div>
												<div class="content">
													<h6 class="title">
														<a href="blog-detail.html">The Good Life</a>
													</h6>
													<div class="info">
														<div class="date">May 31, 2017</div>
														<div class="excerpt">The steamer which crossed the Pacific from Yokohama to San Francisco made a …</div>
													</div>
												</div>
											</li>
											<li>
												<div class="featured">
													<a href="blog-detail.html">
														<img src="<?php echo base_url(); ?>assets/images/blog/thumb/blog_3.jpg" alt="" />
													</a>
												</div>
												<div class="content">
													<h6 class="title">
														<a href="blog-detail.html">Amazed, But Faithful</a>
													</h6>
													<div class="info">
														<div class="date">May 31, 2017</div>
														<div class="excerpt">The steamer which crossed the Pacific from Yokohama to San Francisco made a …</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="widget">
									<div class="widget-title-wrapper">
										<div class="widget-title">
											THEME AD WIDGET
											<div class="simple-line"></div>
										</div>
										<div class="simple-line"></div>
									</div>
									<div class="widget-ads text-center">
										<a href="#"><img src="<?php echo base_url(); ?>assets/images/advertise-pinkie.png" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12 p-0">
								<div class="instagram-title text-center">
									<i class="fa fa-instagram"></i>
									<h5>FOLLOW ME ON INSTAGRAM</h5>
								</div>
								<ul class="instagram">
									<li class="col-sm-2 p-0">
										<a href="http://instagram.com/p/BLHutObDnHM" target="_blank">
											<div class="instagram-wrap">
												<div class="overlay"></div>
												<i class="fa fa-instagram"></i>
												<img src="<?php echo base_url(); ?>assets/images/instagram/instagram_1.jpg" alt="">
											</div>
										</a>
									</li>
									<li class="col-sm-2 p-0">
										<a href="http://instagram.com/p/BLEc533j7yF" target="_blank">
											<div class="instagram-wrap">
												<div class="overlay"></div>
												<i class="fa fa-instagram"></i>
												<img src="<?php echo base_url(); ?>assets/images/instagram/instagram_2.jpg" alt="">
											</div>
										</a>
									</li>
									<li class="col-sm-2 p-0">
										<a href="http://instagram.com/p/BLByAeDjw_D" target="_blank">
											<div class="instagram-wrap">
												<div class="overlay"></div>
												<i class="fa fa-instagram"></i>
												<img src="<?php echo base_url(); ?>assets/images/instagram/instagram_3.jpg" alt="">
											</div>
										</a>
									</li>
									<li class="col-sm-2 p-0">
										<a href="http://instagram.com/p/BK_qGkyDEmd" target="_blank">
											<div class="instagram-wrap">
												<div class="overlay"></div>
												<i class="fa fa-instagram"></i>
												<img src="<?php echo base_url(); ?>assets/images/instagram/instagram_4.jpg" alt="">
											</div>
										</a>
									</li>
									<li class="col-sm-2 p-0">
										<a href="http://instagram.com/p/BK9CCUYDixS" target="_blank">
											<div class="instagram-wrap">
												<div class="overlay"></div>
												<i class="fa fa-instagram"></i>
												<img src="<?php echo base_url(); ?>assets/images/instagram/instagram_5.jpg" alt="">
											</div>
										</a>
									</li>
									<li class="col-sm-2 p-0">
										<a href="http://instagram.com/p/BK6E7dBDOLS" target="_blank">
											<div class="instagram-wrap">
												<div class="overlay"></div>
												<i class="fa fa-instagram"></i>
												<img src="<?php echo base_url(); ?>assets/images/instagram/instagram_6.jpg" alt="">
											</div>
										</a>
									</li>
									<li class="col-sm-2 p-0">
										<a href="http://instagram.com/p/BK4RhabDAaj" target="_blank">
											<div class="instagram-wrap">
												<div class="overlay"></div>
												<i class="fa fa-instagram"></i>
												<img src="<?php echo base_url(); ?>assets/images/instagram/instagram_7.jpg" alt="">
											</div>
										</a>
									</li>
									<li class="col-sm-2 p-0">
										<a href="http://instagram.com/p/BK2EzFaD_b7" target="_blank">
											<div class="instagram-wrap">
												<div class="overlay"></div>
												<i class="fa fa-instagram"></i>
												<img src="<?php echo base_url(); ?>assets/images/instagram/instagram_8.jpg" alt="">
											</div>
										</a>
									</li>
									<li class="col-sm-2 p-0">
										<a href="http://instagram.com/p/BK1YJEwjoKN" target="_blank">
											<div class="instagram-wrap">
												<div class="overlay"></div>
												<i class="fa fa-instagram"></i>
												<img src="<?php echo base_url(); ?>assets/images/instagram/instagram_9.jpg" alt="">
											</div>
										</a>
									</li>
									<li class="col-sm-2 p-0">
										<a href="http://instagram.com/p/BKzLuggjXH7" target="_blank">
											<div class="instagram-wrap">
												<div class="overlay"></div>
												<i class="fa fa-instagram"></i>
												<img src="<?php echo base_url(); ?>assets/images/instagram/instagram_10.jpg" alt="">
											</div>
										</a>
									</li>
									<li class="col-sm-2 p-0">
										<a href="http://instagram.com/p/BKvkxaeDUZN" target="_blank">
											<div class="instagram-wrap">
												<div class="overlay"></div>
												<i class="fa fa-instagram"></i>
												<img src="<?php echo base_url(); ?>assets/images/instagram/instagram_11.jpg" alt="">
											</div>
										</a>
									</li>
									<li class="col-sm-2 p-0">
										<a href="http://instagram.com/p/BKuN2fYjY6Q" target="_blank">
											<div class="instagram-wrap">
												<div class="overlay"></div>
												<i class="fa fa-instagram"></i>
												<img src="<?php echo base_url(); ?>assets/images/instagram/instagram_12.jpg" alt="">
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>