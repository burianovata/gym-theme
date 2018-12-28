<?php get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
      gggg
    <?php endwhile; ?>
  <?php else : ?>
    <p><?php __('No Posts Found'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>