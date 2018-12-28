		<?php get_header(); ?>
		<!-- Navigation -->
		<nav class="navbar fixed-top pt-0">
			<div class="ml-auto mr-5 pr-5">
				<nav class="navbar navbar-light gym-navbar">
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
					</button>
				</nav>
				<div class="collapse" id="navbarToggle">
					<ul class="navbar-nav gym-navbar">
						<li class="nav-item"><a class="nav-link" href="<?php echo get_home_url() . '/#about'; ?>">About</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo get_home_url() . '/#features'; ?>">Our features</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo get_home_url() . '/#programs'; ?>">Programs</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Header -->
		<header style="background: url(
			<?php echo get_theme_mod('header_image', get_theme_file_uri('/img/top-banner.jpg')); 
			?>) no-repeat center center;">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 ml-lg-5 pb-5 mr-auto">
						<h1 class="heading display-2"><?php echo get_theme_mod('header_heading', 'Build your body strong'); ?></h1>
						<p><?php echo get_theme_mod('header_descr', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'); ?></p>
					</div>
				</div>
			</div>
		</header>
		<!-- About section -->
		<section id="about">
			<div class="container pb-lg-5">
				<div class="row">
					<div class="col-lg-9 col-sm-12 gym-container px-lg-5 px-md-5 py-5">
						<div class="row">
						<!-- Top post in section -->
							<?php 
								$homepageClasses = new WP_Query( array(
									'posts_per_page' => 1,
									'post_type' => 'class',
									'category_name' => 'about-top-post'
								));
								while( $homepageClasses -> have_posts() ) {
									$homepageClasses -> the_post(); ?>
									<div class="col-lg-8 col-12">
										<?php the_post_thumbnail('class_horizontal', array('class' => 'img-fluid float-left higher')); ?>
									</div>
									<div class="col-lg-4 col-12">
										<h3 class="heading"><?php the_title(); ?></h3>
										<p><?php echo wp_trim_words(get_the_content(), 5); ?></p>
										<a class="contrast-link" href="<?php the_permalink(); ?>">Know more</a>
									</div>
							<?php }
							?>
						<!-- Bottom post in section -->
							<?php 
								$homepageClasses = new WP_Query( array(
									'posts_per_page' => 1,
									'post_type' => 'class',
									'category_name' => 'about-bottom-post'
								));
								while( $homepageClasses -> have_posts() ) {
									$homepageClasses -> the_post(); ?>

									<div class="col-12 pt-4">
										<h2 class="heading"><?php the_title(); ?></h2>
										<p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
										<a href="<?php the_permalink(); ?>" class="btn btn-primary">Know more</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-12 px-0 text-center">
								<?php the_post_thumbnail('class_vertical', array('class' => 'img-fluid lower')); ?>
							</div>
								<?php }
							?>
				</div>

			</div>
		</section>
		<!-- Features section -->
		<section id="features" class="text-white text-center" style="background: url(
			<?php echo get_theme_mod('features_image', get_theme_file_uri('/img/img-3.jpg')); 
			?>) no-repeat center center; background-size: cover;">
			<div class="container">
				<div class="row">
					<div class="col-12 py-4">
						<h2 class="heading"><?php echo get_theme_mod('features_heading', 'Our features'); ?></h2>
						<p><?php echo get_theme_mod('features_descr', 'Checkout our fitness classes'); ?></p>
					</div>
					<?php 
						$homepageFeatures = new WP_Query( array(
							'posts_per_page' => 3,
							'post_type' => 'feature'
						));
						while( $homepageFeatures -> have_posts() ) {
							$homepageFeatures -> the_post(); ?>
							<div class="col-lg-4 col-md-6 col-sm-12 pb-5 text-center">
								<i class="<?php the_field('feature_icon'); ?>"></i>
								<h3 class="heading"><?php the_title(); ?></h3>
								<p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
								<a href="<?php echo get_post_type_archive_link('feature'); ?>" class="btn btn-primary ">Know more</a>
							</div>
					<?php }
					?>
				</div>
			</div>
		</section>
		<!-- Program section -->
		<section id="programs">
			<div class="container mb-5">
				<div class="row">
					<div class="col-12 pt-4 text-center"><h2 class="heading">
						<?php echo get_theme_mod('programs_heading', 'Our programs'); ?>
					</h2></div>
					<?php 
						$homepagePrograms = new WP_Query( array(
							'posts_per_page' => 6,
							'post_type' => 'programs'
						));
						while( $homepagePrograms -> have_posts() ) {
							$homepagePrograms -> the_post(); ?>
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="program-container">
									<?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
									<div class="program-img-caption higher">
										<h3><a class="text-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<p>by <?php the_author(); ?>, <?php echo get_the_date('M n, Y'); ?></p>
									</div>
								</div>
							</div>
							<?php }
							?>
					<div class="col-12 mt-5 pt-3 text-center">
						<a href="<?php echo get_post_type_archive_link('programs'); ?>" class="btn btn-primary py-3 px-5">Know more</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer -->
		<?php get_footer(); ?>