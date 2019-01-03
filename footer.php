		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-sm-12 bg-dark py-5">
						<div class="col-lg-6 col-md-12 ml-lg-auto mb-auto pb-5">
							<!-- Logo img -->
							<img class="img-fluid py-3" src="
								<?php echo get_theme_mod('footer_logo', get_theme_file_uri('/img/logo.png')); ?>
							" alt="">
							<p class="text-white"><?php echo get_theme_mod('footer_descr', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'); ?></p>
						</div>
						<!-- Footer img -->
						<img class="float-left footer-img img-fluid" src="
							<?php echo get_theme_mod('footer_image', get_theme_file_uri('/img/img-2.png')); ?>
						" alt="">
					</div>
					<div class="col-lg-6 col-sm-12 py-5 px-lg-5 px-sm-1 bg-primary text-white">
						<div class="row">
							<div class="col-6">
								<h4 class="heading">Quick links</h4>
								<!-- CHANGE LINK TITLES -->
								<ul class="navbar-nav gym-navbar-bottom">
									<li class="nav-item"><a class="nav-link" href="<?php echo get_home_url() . '/#about'; ?>">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo get_home_url() . '/#features'; ?>">
										<?php echo get_theme_mod('features_heading', 'Our features'); ?></a>
									</li>
									<li class="nav-item"><a class="nav-link" href="<?php echo get_home_url() . '/#programs'; ?>">
										<?php echo get_theme_mod('programs_heading', 'Our programs'); ?></a>
									</li>
								</ul>
							</div>
							<div class="col-6">
								<!-- CHANGE CONTACT INFO -->
								<h4 class="heading">Contact us</h4>
								<ul class="navbar-nav gym-navbar-bottom">
									<li class="nav-item"><i class="fas fa-cloud pr-2"></i> 132, My Street, Kirgstom, New York 1252</li>
									<li class="nav-item"><i class="fas fa-cloud pr-2"></i> 240-532-6794</li>
									<li class="nav-item"><i class="fas fa-cloud pr-2"></i> lorem@ispum.com</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 text-center text-white bg-secondary py-lg-5 py-sm-3"><p>&copy;2018 Design by PSDFREEBIES.COM.</p></div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>