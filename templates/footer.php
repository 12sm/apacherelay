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

      <div id="ts-e4m" class="col-sm-6">
    <h5>Email List Signup</h5>
    <form id="signup" action="wp-content/themes/justintownesearle/lib/send.php" method="post" >
      <input id="email"  name="fan[email]" type="email" value="enter your email here" placeholder="enter your email here" class="erase email" />  
      <input name="artist_id" value="1221" id="artist_id" type="hidden">
      <input name="fan[source_campaign]" value="http://app.topspin.net/api/v1/artist/1221/campaign/10045764" id="source_campaign" type="hidden">
      <input name="fan[referring_url]" value="http://www.justintownesearle.com" id="referring_url" type="hidden">
      <input name="fan[confirmation_target]" value="http://labs.topspin.net/downloadanywhere/confirm.php?sessionid=9358432f3b5dca8fe22794988794c6d8" id="confirmation_target" type="hidden">      
      <input name="submit" type="submit" value="Sign Up &rsaquo;" />
    </form>   
  </div>
              <div id="social" class="col-xs-6 social-nav">
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