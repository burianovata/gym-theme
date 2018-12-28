<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center bg-dark text-white">
                <h1 class="heading display-3">All programs</h1>
            </div>
        </div>
    </div>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    	<div class="container py-3 mb-5">
    		<div class="row">
    			<div class="col-12 text-center"><h2 class="heading"><?php the_title(); ?></h2></div>
    			<div class="col-12">
                    <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid float-left mr-4')); ?>
    				<p><?php the_content(); ?></p>
    				<a href="<?php the_permalink(); ?>" class="contrast-link">Know more</a>
    			</div>
    		</div>
    	</div>
    <?php endwhile; ?>
  <?php else : ?>
    <p><?php __('No Posts Found'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>