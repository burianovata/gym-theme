<?php get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <div class="container py-4 mb-5">
    		<div class="row">
    			<div class="col-12 text-center"><h2 class="heading"><?php the_title(); ?></h2></div>
    			<div class="col-12">
    				<?php the_post_thumbnail('full', array('class' => 'img-fluid float-left mr-3')); ?>
    				<p><?php the_content(); ?></p>
                    <a href="<?php echo get_post_type_archive_link('programs'); ?>" class="btn btn-primary py-3 px-5">All programs</a>
    			</div>
    		</div>
    	</div>
    <?php endwhile; ?>
  <?php else : ?>
    <p><?php __('No Posts Found'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>