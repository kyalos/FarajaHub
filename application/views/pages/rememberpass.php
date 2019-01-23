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
					</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div id="main">
				<div class="section mt-7 mb-4">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title text-center">
									<h2 class="lato mb-1">My Account</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section pb-20">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="commerce">
									<h3 class="fw-600 mb-4">Reset password</h3>
									<form method="post" action="<?php echo base_url(); ?>pages/login">
										<div class="row">
											<div class="col-md-12">
												<label>Email address <span class="required">*</span></label>
												<div class="form-wrap">
													<input type="text" name="email" value="" class="form-text highlighted" />
												</div>
												<div class="mb-2"></div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<input type="submit" class="button" />&nbsp;
												
												</div>
												<div class="mb-2"></div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="widget">
								<div class="widget-inner">
									<div class="widget-title">ENERGIZE YOUR INBOX</div>
									<p>Subscribe and stay updated with the latest news from us. The timbers beneath are of a peculiar strength.<br>Oh, this is just some nonsense text. We never spam!</p>
									<div class="mb-1"></div>
									<form>
										<div class="clearfix">
											<div class="form-signup-row">
												<input type="text" placeholder="Your email" name="name" id="name" class="highlighted">
												<div class="mb-1"></div>
											</div>
											<div class="form-signup-row">
												<input type="submit" name="signup_submit" id="signup_submit" value="Ok, Sign Me Up" class="button">
											</div>
										</div>
										<!-- /mc_form_inside -->
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="widget">
								<div class="widget-inner">
									<div class="widget-title">LATEST TWEETS</div>
									<div class="recent-tweets">
										<div class="twt-avatar">
											<a target="_blank" href="#">
												<img src="<?php echo base_url(); ?>assets/images/avatar/author.jpg" alt="" />
											</a>
										</div>
										<div class="twt-author fw-bolder">Author</div>
										<div class="twt-follow">
											<a target="_blank" href="#">Follow on Twitter</a>
										</div>
										<div class="clearfix"></div>
										<div class="simple_line"></div>
										<div class="twt-icon pull-left">
											<i class="fa fa-twitter"></i>
										</div>
										<div class="twitter-slider" data-autoplay="true" data-delay="5500">
											<ul class="slides">
												<li class="twt-item">
													<div class="twt-body">
														<div class="twt-in">
															Verve <a href="#" target="_blank">#WordPress</a> <a href="#" target="_blank">#Theme</a> is now officially compatible with <a href="#" target="_blank">#WPML</a>: <a href="#" target="_blank">https://t.co/l1Kp6Gy5RV</a> <a href="#" target="_blank">https://t.co/OdesvAfl4h</a>
														</div>
														<div class="clearfix"></div>
														<a class="twitter-time header-font fw-bolder" target="_blank" href="#">46 days ago</a>
														<span class="twt-extra-info"> - <a class="twitter-time header-font fw-bolder" target="_blank" href="#">Author</a></span>
													</div>
												</li>
												<li class="twt-item">
													<div class="twt-body">
														<div class="twt-in">
															Verve <a href="#" target="_blank">#WordPress</a> <a href="#" target="_blank">#Theme</a> is now officially compatible with <a href="#" target="_blank">#WPML</a>: <a href="#" target="_blank">https://t.co/l1Kp6Gy5RV</a> <a href="#" target="_blank">https://t.co/OdesvAfl4h</a>
														</div>
														<div class="clearfix"></div>
														<a class="twitter-time header-font fw-bolder" target="_blank" href="#">46 days ago</a>
														<span class="twt-extra-info"> - <a class="twitter-time header-font fw-bolder" target="_blank" href="#">Author</a></span>
													</div>
												</li>
												<li class="twt-item">
													<div class="twt-body">
														<div class="twt-in">
															Verve <a href="#" target="_blank">#WordPress</a> <a href="#" target="_blank">#Theme</a> is now officially compatible with <a href="#" target="_blank">#WPML</a>: <a href="#" target="_blank">https://t.co/l1Kp6Gy5RV</a> <a href="#" target="_blank">https://t.co/OdesvAfl4h</a>
														</div>
														<div class="clearfix"></div>
														<a class="twitter-time header-font fw-bolder" target="_blank" href="#">46 days ago</a>
														<span class="twt-extra-info"> - <a class="twitter-time header-font fw-bolder" target="_blank" href="#">Author</a></span>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="widget">
								<div class="widget-inner">
									<div class="widget-title">RECENT POSTS</div>
									<div class="recent-posts">
										<ul class="recent-post">
											<li>
												<div class="recent-post-date">June 12, 2016</div>
												<h6 class="header-font">
														<a href="blog-detail.html">
															Doing Things Right
															<i class="fa fa-angle-double-right"></i>
														</a>
													</h6>
												<div class="simple_line"></div>
											</li>
											<li>
												<div class="recent-post-date">May 27, 2016</div>
												<h6 class="header-font">
													<a href="blog-detail.html">
														Technology Slaves
														<i class="fa fa-angle-double-right"></i>
													</a>
												</h6>
												<div class="simple_line"></div>
											</li>
											<li>
												<div class="recent-post-date">April 28, 2016</div>
												<h6 class="header-font">
													<a href="blog-detail.html">
														Gallery Post
														<i class="fa fa-angle-double-right"></i>
													</a>
												</h6>
												<div class="simple_line"></div>
											</li>
											<li>
												<div class="recent-post-date">April 7, 2016</div>
												<h6 class="header-font">
													<a href="blog-detail.html">
														Get Ready For Business
														<i class="fa fa-angle-double-right"></i>
													</a>
												</h6>
												<div class="simple_line"></div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<div class="copyright">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<ul class="footer-menu">
								<li><a href="#">HOME</a></li>
								<li><a href="#">ABOUT ME</a></li>
								<li><a href="<?php echo base_url(); ?>pages/contact/contactus">GET IN TOUCH</a></li>
							</ul>
						</div>
						<div class="col-sm-6">
							<div class="text-right text-center-xs">Developed by <a href="http://themeforest.net/user/tk-themes/portfolio">TK-Themes</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="hook-to-top" class="prk_radius">
			<i class="fa fa-arrow-up"></i>
		</div>
		
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-migrate.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/classie.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/slick.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
	</body>

<!-- Mirrored from tk-themes.net/html-shout/demo/lifestyle/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Aug 2018 08:49:02 GMT -->
</html>