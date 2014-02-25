<?php
/*
Template Name: Blogs
*/
get_header(); ?>

<?php if (have_posts()) : ?>
<?php $post = $posts[0]; ?>

<div id="container-fluid">
	<div id="content" role="main" class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
		<?php while (have_posts()) : the_post(); ?>
			<div class="row">
			<div class="col-sm-12">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		</div>
		</div>
		<div class="row">
		<div class="col-sm-12">
		<?php the_content(); ?>
		</div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
		</div>
		<div class="col-sm-2">
		<?php get_search_form(); ?>
		</div>
		


	</div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>