	<?php echo do_shortcode('[mbYTPlayer url="http://youtu.be/kRqk4M3hn-c" opacity="1" quality="default" ratio="auto" isinline="false" showcontrols="false" realfullscreen="true" printurl="true" autoplay="true" mute="true" loop="true" addraster="false"] '); ?>
	<?php while (have_posts()) : the_post(); ?>
	 	<?php the_content(); ?>
		<?php endwhile; ?>