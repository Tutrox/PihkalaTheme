<?php /*Template Name: No title*/
get_header();
if (have_posts()):
  while (have_posts()):
    the_post(); ?>
	<?php the_content(); ?>
	<?php
  endwhile;
else:
  errorText();
endif;
get_footer();
?>
