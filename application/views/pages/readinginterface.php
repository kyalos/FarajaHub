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
				<div class="section mt-7">
					<div class="container">
					  <?php foreach($posts as $row): ?>
						<div class="row">
							<div class="col-sm-8">
								<div class="single-content">
									<div class="media-slider mb-4">
										<div class="image"><img src="<?php echo base_url(); ?>uploads/<?php echo $row->story_image1; ?>"/></div>
										<div class="image"><img src="<?php echo base_url(); ?>uploads/<?php echo $row->story_image2; ?>"/></div>
										<div class="image"><img src="<?php echo base_url(); ?>uploads/<?php echo $row->story_image3; ?>"/></div>
									</div>
									<div class="blog-detail-header">
										<div class="blog-detail-header-content text-center">
											<div class="meta">
												<a href="#"><?php echo $row->category; ?></a>, <a href="#">Untold Stories</a>
											</div>
											<h2 class="entry-title"><?php echo $row->title; ?></h2>
											<div class="info">
												<span class="date"><?php echo $row->date_created; ?></span>
												<span class="divider">-</span>
												<span class="author">Posted by <a href="#"><?php echo $row->firstname; ?>&ensp;<?php echo $row->secondname; ?></a></span>
											</div>
										</div>
									</div>
									<p><?php echo $row->content; ?></p>
									<br />
									<div class="text-center">
										<img width="480" src="<?php echo base_url(); ?>uploads/<?php echo $row->emphasis; ?>" alt="" />
									</div>
									<br />
									<p><?php echo $row->content1; ?></p>
								</div>
								<div class="blog-detail info-bottom">
									<div class="date"><?php echo $row->date_created; ?></div>
									<div class="share">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-pinterest"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
									</div>
								</div>
								<div class="author-info">
									<div class="author-avatar">
										<a href="#"><img src="<?php echo base_url(); ?>uploads/<?php echo $row->profile_image; ?>" alt="" /></a>
									</div>
									<a class="author-name" href="#"><?php echo $row->firstname; ?>&ensp;<?php echo $row->secondname; ?></a>
									<div class="author-description">
										<?php echo $row->description; ?>
									</div>
								</div>
							<?php endforeach; ?>
								<div class="blog-detail related-post">
									<h4 class="title">Related News</h4>
									<p class="sub-title">Other posts that you should not miss.</p>
									<div class="mb-3"></div>
									<div class="blog-list">
										<div class="row">
										  <?php foreach ($posts as $row): ?>
											<div class="col-md-4">
												<div class="blog-item text-center mb-6">
													<div class="blog-inner">
														<a href="blog-detail.html">
															<div class="overlay"><i class="mdi-link-variant"></i></div>
															<img src="<?php echo base_url(); ?>uploads/<?php echo $row->story_image1; ?>" alt="" />
														</a>
														<div class="info">
															<div class="tags">
																<a href="#">Free Your Mind</a>, <a href="#"><?php echo $row->category; ?></a>
															</div>
															<div class="title">
																<a href="blog-detail.html"><?php echo $row->title; ?></a>
															</div>
															<div class="text">
																<p><?php echo word_limiter($row->content, 15);?></p>
																<a href="#" class="button small">Read more</a>
															</div>
														</div>
														<div class="meta">
															<span class="date"><?php echo $row->date_created; ?></span>
															<span class="author">Posted by <a href="#"><?php echo $row->firstname; ?>&ensp;<?php echo $row->secondname; ?></a></span>
														</div>
													</div>
												</div>
											</div>
										  <?php endforeach; ?>
										</div>
									</div>
								</div>
								<div class="single-nav">
									<div class="simple_line"></div>
									<div class="single-nav-wrapper">
										<div class="navigation-previous">
											<a href="#">
												<div class="heading">← PREVIOUS POST</div>
												<div class="title">We Love Blogging</div>
											</a>
										</div>
										<div class="navigation-next">
											<a href="#">
												<div class="heading">NEXT POST →</div>
												<div class="title">Amazed, But Faithful</div>
											</a>
										</div>
									</div>
								</div>
								<div class="comments">

									<h4 class="comment-title"><?php echo $com; ?> &nbsp; Comments</h4>
									<p class="comment-subtitle"><?php echo $row->title; ?></p>
									<ol class="comment-list">
										<li class="comment">
										<?php foreach ($comm as $row): ?>
											<div class="content">
												<div class="comment-author">
													<img alt="" src="<?php echo base_url(); ?>assets/images/author/avatar.png" class="avatar" />
												</div>
												<div class="comment-content">
													<div class="meta">
														<h3 class="name"><?php echo $row->firstname; ?>&nbsp;<?php echo $row->secondname; ?></h3>
														<span class="time"><?php echo $row->date_created; ?></span>
														<span class="divider">-</span>
														<span class="link"><a class="color" href="#">Reply</a></span>
													</div>
													<div class="text">
														<p><?php echo $row->comment; ?></p>
													</div>
												</div>
											</div>
										<?php endforeach; ?>
									</ol>
								</div>
								<div class="respond-wrapper">
									<div class="comment-respond">
										<h4 class="comment-title">Leave a Comment</h4>
										<p class="comment-subtitle">Your feedback is valuable for us. Your email will not be published.</p>
										<div class="mb-3"></divdiv>
										<form class="comment-form" method="post" action="<?php echo base_url(); ?>posts
											/commentus>
											<div class="row">
												<div class="col-md-12">
													<textarea name="comment" id="comment" class="highlighted mb-3" placeholder="Your comment" rows="8"></textarea>
												</div>
											</div>
											<div class="row">
												<div class="col-md-4">
													<input type="email" class="highlighted" name="email" id="email" placeholder="Email (required)" />
												</div><br><br>
												<div class="col-md-4">
													<input type="url" class="highlighted" name="url" id="url" placeholder="Website" />
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<a href="#" class="button mt-2" type="Submit">Submit Comment</a>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
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
											POPULAR TAGS
											<div class="simple-line"></div>
										</div>
										<div class="simple-line"></div>
									</div>
									<div class="widget-tags">
										<a href="#">Music</a>
										<a href="#">Kids</a>
										<a href="#">Party</a>
										<a href="#">Love</a>
										<a href="#">Shopping</a>
										<a href="#">Vintage</a>
										<a href="#">Trends</a>
										<a href="#">Social</a>
										<a href="#">Family</a>
										<a href="#">LifeStyle</a>
										<a href="#">Travel</a>
										<a href="#">Blogging</a>
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