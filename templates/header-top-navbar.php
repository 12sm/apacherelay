<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <!-- <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>-->
    </div>

    <div id="social-float" class="row social-nav">
  <ul id="menu-social-navigation" class=""><li class="menu-"><li class="menu-"><a href="https://www.facebook.com/saraevans" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
<li class="menu-"><a href="https://twitter.com/saraevansmusic" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
<li class="menu-"><a href="http://instagram.com/saraevansmusic" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
<li class="menu-"><a href="http://www.pinterest.com/saraevansmusic" target="_blank"><i class="fa fa-pinterest fa-2x"></i></a></li>
<li class="menu-"><a href="http://www.youtube.com/user/saraevans" target="_blank"><i class="fa fa-youtube-square fa-2x"></i></a></li>
</ul>
              </div>

    <nav class="collapse navbar-collapse" role="navigation">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      </div>
      </div>
    </nav>
  </div>
</header>
<div class="top-banner container-fluid">
<div class="container">
<div class="row">
</div>
</div>

 <!--<video autoplay loop poster="/assets/img/back.jpg" id="bgvid">
    <source src="/wp-content/themes/apacherelay/assets/img/back.webm" type="video/webm">
      <source src="/wp-content/themes/apacherelay/assets/img/back.mp4" type="video/mp4">
    </video>-->
    </div>
