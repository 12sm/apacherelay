<div class="row">
	<div class="col-sm-12">
	<h1>Contact</h1>
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
	</div>
</div>