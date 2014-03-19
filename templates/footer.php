<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
      <div class="row sidebar-footer">
      	<?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="row footer-nav">  
        <?php
     if (has_nav_menu('footer_navigation')) :
       wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => ''));
     endif;
  ?>
    </div>
         
      <div class="row col">
              <div id="social" class="col-xs-12 social-nav">
  <ul id="menu-social-navigation" class=""><li class="menu-"><a href="https://www.facebook.com/theapacherelay"><i class="fa fa-facebook fa-2x"></i></a></li>
<li class="menu-"><a href="https://twitter.com/apacherelay" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
<li class="menu-"><a href="instagram.com/apacherelay" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
<li class="menu-"><a href="http://www.pinterest.com/saraevansmusic" target="_blank"><i class="fa fa-pinterest fa-2x"></i></a></li>
<li class="menu-"><a href="www.youtube.com/user/apacherelay" target="_blank"><i class="fa fa-youtube-square fa-2x"></i></a></li>
  </ul>
              </div>
      <p class="credits">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>  |  <a href="http://12southmusic.com/" target="_blank">built by 12SM</a></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<!-- Begin 12SM Network Analytics <!-->   
  <script type="text/javascript">
	var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-27814560-1']);
  	_gaq.push(['_setDomainName', '12southmusic.com']);
  	_gaq.push(['_setAllowLinker', true]);
  	_gaq.push(['_trackPageview']);
 	(function() {
	  	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	  	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	  	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  	})();
	</script>
  <!-- End 12SM Network Analytics <!--> 