<?php echo do_shortcode('[wpv-view name="BACKGROUND IMAGE | PAGE" ids="1457"]');?>
<div class="row">
	<div class="col-sm-12 contact-page">
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
	</div>
</div>