<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="container-fluid">
	<div id="content" role="main" class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<div class="row">
			<div class="col-sm-12">
		<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		</div>
		</div>
		<div class="row">
		<div class="col-sm-12">
		<?php the_content(); ?>
		</div>
		</div>
		</div>
		<div class="col-sm-2">
		<?php get_search_form(); ?>
		</div>
		


	</div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>