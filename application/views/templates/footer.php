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
											<?php foreach ($posts as $row): ?>
											<li>
												<div class="recent-post-date"><?php echo $row->date_created; ?></div>
												<h6 class="header-font">
													<a href="blog-detail.html">
														<?php echo $row->title; ?>
														<i class="fa fa-angle-double-right"></i>
													</a>
												</h6>
												<div class="simple_line"></div>
											</li>
										  <?php endforeach; ?>	
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
								<li><a href="#">GET IN TOUCH</a></li>
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

<!-- Mirrored from tk-themes.net/html-shout/demo/lifestyle/blog-split.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Aug 2018 08:49:00 GMT -->
</html>