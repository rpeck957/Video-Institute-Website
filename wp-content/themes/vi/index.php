<?php get_header(); ?>

<div class="content">
  <?php
  	if ( have_posts() ) {
  		while ( have_posts() ) {
  			the_post();
  			the_content();
  		} // end while
  	} // end if
  ?>
</div>

<?php get_footer(); ?>
