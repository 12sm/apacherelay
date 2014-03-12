<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?> 
  
<?php

do_shortcode('[wpv-view name="Home-video"]');

do_shortcode('[wpv-view name="Music"]');

do_shortcode('[wpv-view name="Tour"]');

do_shortcode('[wpv-view name="blog-home"]');

do_shortcode('[wpv-view name="Gallery-home"]');

do_shortcode('[wpv-view name="Store"]');

?>


  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>