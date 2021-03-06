<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
   if (!is_page(1259)) {
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    } 
} ?>
  <div class="wrap container-fluid" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">       
        <?php include roots_template_path(); ?>
      </main>
    </div>
  </div>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
