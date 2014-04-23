<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?> 
  
<?php

echo do_shortcode('[wpv-view name="blog-home"]');

echo do_shortcode('[wpv-view name="Music"]');

echo do_shortcode('[wpv-view name="Tour"]');

echo do_shortcode('[wpv-view name="Gallery-home"]');

echo do_shortcode('[wpv-view name="Store"]');

?>


  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>