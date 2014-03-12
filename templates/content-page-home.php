<?php while (have_posts()) : the_post(); ?>
  <!--before content-->
  <?php the_content(); ?>
  <!--after the content-->
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>