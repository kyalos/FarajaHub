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
				<div class="section section-bg-2 section-fixed pt-17 pb-17">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="text-center">
									<h2 class="white lato fw-bolder fz-40">LET'S GET TOGETHER</h2>
									<h5 class="white fw-600 fz-20">Reach me with ease and let me know your thoughts.<br />Without you this is pointless.</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section mt-7 mb-10">
					<div class="container">
						<div class="row">
							<div class="col-sm-8">
								<h5 class="dark fw-600 fz-22 mb-1">I WOULD LOVE TO HEAR FROM YOU</h5>
								<div class="simple-line"></div>
								<div class="mb-2"></div>
								<p>The try-works are planted between the foremast and mainmast, the most roomy part of the deck. The timbers beneath are of a peculiar strength, fitted to sustain the weight of an almost solid mass of brick and mortar, some ten feet by eight square. The strong vapor now completely filling.</p>
								<div class="mb-4"></div>
								<form class="contact-form">
									<div class="row">
										<div class="col-md-12">
											<textarea class="highlighted" name="message" id="message" rows="8" placeholder="Your message"></textarea>
											<div class="mb-2"></div>
										</div>
										<div class="col-md-4">
											<input type="text" class="highlighted" name="firstname" id="name" placeholder="Firstname" />
											<input type="text" class="highlighted" name="secondname" id="name" placeholder="Secondname" />
											<div class="mb-2"></div>
										</div>
										<div class="col-md-4">
											<input type="text" class="highlighted" name="email" id="email" placeholder="Email" />
											<div class="mb-2"></div>
										</div>
										<div class="col-md-4">
											<input type="text" class="highlighted" name="subject" id="subject" placeholder="Subject" />
											<div class="mb-2"></div>
										</div>
										<div class="col-md-3">
											<input type="submit" class="button" value="Send message"/>
										</div>
									</div>
								</form>
							</div>
							<div class="col-sm-4">
								<h5 class="dark fw-600 fz-22 mb-1">CONTACT INFO</h5>
								<div class="simple-line"></div>
								<div class="mb-2"></div>
								<p>He was going on with some wild reminiscences about his life. They could not stop looking into that beautiful sunset.</p>
								<div class="mb-4"></div>
								<h2 class="dark fw-bolder lato fz-24 mb-1">Chelsea Miller</h2>
								<h4 class="dark fw-600 lato fz-14 contact-info">River Street, Blue Building</h4>
								<h4 class="dark fw-600 lato fz-14 contact-info">5690-970 New York City</h4>
								<div class="simple-line thick mt-2 mb-2 mw-40"></div>
								<a class="fw-600 lato fz-14 contact-info" href="mailto:chelsea@shout.com">chelsea@shout.com</a>
								<h4 class="dark fw-600 lato fz-14 contact-info">+1 234 567 890</h4>
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
			