<footer class="content-info container-fluid" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
      
      <div class="row footer-nav">  
        	<?php
	        	if (has_nav_menu('footer_navigation')) :
	        		wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => ''));
	        	endif;
	        ?>
	  </div>
         
    <div class="row signup-row">
      	<div id="signup">
      		<div class="row">
	        	<div class="col-sm-8 col-xs-push-4 topspin-signup">
		        	<link href="https://app.e2ma.net/css/signup.sml.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="https://app.e2ma.net/app2/audience/tts_signup/1759284/e15c36343b7c077c709fb8a2575da8a3/1735855/?v=a"></script><div id="load_check" class="signup_form_message" >This form needs Javascript to display, which your browser doesn't support. <a href="https://app.e2ma.net/app2/audience/signup/1759284/1735855/?v=a"> Sign up here</a> instead </div><script type="text/javascript">signupFormObj.drawForm();</script>
		        </div>
		        <div class="col-sm-4 col-xs-pull-8 topspin-signup" id="signup-button">
		        	<h3>Email Signup</h3>
		        </div>
		    </div>
		</div>
	</div>
	
	<div id="social-float" class="row social-nav">
    <ul id="menu-social-navigation" class="">
    	<li class="menu-"><a href="https://www.facebook.com/theapacherelay" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
    	<li class="menu-"><a href="https://twitter.com/apacherelay" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
    	<li class="menu-"><a href="http://instagram.com/apacherelay" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
    	<li class="menu-"><a href="http://www.youtube.com/user/apacherelay" target="_blank"><i class="fa fa-youtube-square fa-2x"></i></a></li>
    </ul>
    </div>
    
    <div class="row">
    <div id="social" class="col-sm-6 social-nav">
		<ul id="menu-social-navigation" class="">
	    	<li class="menu-"><a href="https://www.facebook.com/theapacherelay" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
	        <li class="menu-"><a href="https://twitter.com/apacherelay" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
	        <li class="menu-"><a href="http://instagram.com/apacherelay" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
	        <li class="menu-"><a href="http://www.youtube.com/user/apacherelay" target="_blank"><i class="fa fa-youtube-square fa-2x"></i></a></li>
	    </ul>
	</div>
              
    <div class="credits col-sm-6">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>  |  <a href="http://12southmusic.com/" target="_blank">built by 12SM</a></p>
    </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
  
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