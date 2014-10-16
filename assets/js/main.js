/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

  

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      //begining of img function
      
      


      // JavaScript to be fired on all pages
     $(".main").fitVids();
     //Inject classes into #signup
     $("#e2ma_signup_submit_button").addClass('btn btn-default');
	//click for mobile/tablet
	$('.hover').bind('touchstart touchend', function(e) {
        e.preventDefault();
        $(this).toggleClass('hover_effect');
    });

    }
  },
 
  katiequeenoftennessee: {
	  init: function() {
	  
	  	var $talkbtn,$question,hashtags,twitter_url,update_widgets;
	  	$talkbtn=$("#talk_btn");
	  	$question=$("#question_text");
	  	twitter_url="https://twitter.com/intent/tweet";
	  	hashtags="katiequeen";
	  	update_widgets=function(){
	  		var e,t;
	  		e=encodeURIComponent($question.val());
	  		t=""+twitter_url+"?hashtags="+hashtags+"&text="+e;return $talkbtn.attr("href",t)};
	  		$question.on("keyup",function(e){return update_widgets()});
	  		$talkbtn.on("click ",function(e){e.preventDefault();update_widgets();return!0});
	  		
	  $(function(){
          $.okvideo({ source: 'http://vimeo.com/100718122', volume: 0, adproof: true }) 
        });
	  		
	}
	  
	  
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
      
      // execute tubular first
     //$('#vid-content').tubular({
     //	videoId: $videoID,
     //   repeat: true,
     //   wrapperZIndex: -10000
     //});
      
      //Smooth Scroll
      $(function() {
	      $('a[href*=#]:not([href=#])').click(function() {
		      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
				      $('html,body').animate({
					      scrollTop: target.offset().top
					   }, 1000);
					   return false;
				}
			}
		   });
		});
		// End Smooth Scroll	
   
//Begin Parallax
  var $window = $(window);
  var $firstBG = $('.music-bg');
  var $secondBG = $('.tour-bg');
  var $thirdBG = $('.blog-home-bg');
  var $fourthBG = $('.gallery-home-bg');
  var $fifthBG = $('.store-bg');
  
  var windowHeight = $window.height(); //get the height of the window
    
  //apply the class "inview" to a section that is in the viewport
  $('.music-bg, .tour-bg, .blog-home-bg, .gallery-home-bg, .store-bg').bind('inview', function (event, visible) {
      if (visible == true) {
        $(this).addClass("inview");
      } else {
        $(this).removeClass("inview");
      }
    });
  
  //function that is called for every pixel the user scrolls. Determines the position of the background
  /*arguments: 
    x = horizontal position of background
    windowHeight = height of the viewport
    pos = position of the scrollbar
    adjuster = adjust the position of the background
    inertia = how fast the background moves in relation to scrolling
  */
  function newPos(x, windowHeight, pos, adjuster, inertia){
    return x + "% " + (-((windowHeight + pos) - adjuster) * inertia)  + "px";
  }
  
  //function to be called whenever the window is scrolled or resized
  function Move(){ 
    var pos = $window.scrollTop(); //position of the scrollbar


    //if the first section is in view...
    if($firstBG.hasClass("inview")){
      //call the newPos function and change the background position
      $firstBG.css({'backgroundPosition': newPos(20, windowHeight, pos, 4150, -0.4)}); 
    }
     
    //if the second section is in view...
    if($secondBG.hasClass("inview")){
      //call the newPos function and change the background position
      $secondBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 2600, -0.4)});
    }
    
    //if the third section is in view...
    if($thirdBG.hasClass("inview")){
      //call the newPos function and change the background position
      $thirdBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 2100, -0.4)});
    }
    
    //if the fourth section is in view...
    if($fourthBG.hasClass("inview")){
      //call the newPos function and change the background position
      $fourthBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 5600, -0.4)});   
    }
    
    //if the fifth section is in view...
    if($fifthBG.hasClass("inview")){
      //call the newPos function and change the background position
      $fifthBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 5600, -0.4)});
    }
    
  }
  
  enquire.register("only screen (max-width : 992px) and (orientation : landscape)", {
    match: function() {
      console.log('match');
      $window.unbind('scroll', function(){ 
        Move();
      });
    },
    unmatch: function() {
      console.log('unmatch');
      $window.resize(function(){ //if the user resizes the window...
        Move(); //move the background images in relation to the movement of the scrollbar
      });   
    
      $window.bind('scroll', function(){ //when the user is scrolling...
        Move(); //move the background images in relation to the movement of the scrollbar
      });
    },
    setup : function() {
    },
    
    // End Parallax
    });
		
	 
	 $('.vid-feature').colorbox({
	 	iframe: true,
		innerWidth : 1280,
		innerHeight : 650
	});
	
	$("#cboxLoadedContent").fitVids();

		//Inject Bootstrap classes into tumblr widget
	var tumblrText = $(".twitter-tweet").nextAll();
		$('tumblrText').remove();
    $('.tumblr_post').addClass('col-sm-6 col-md-3');
    $('.tumblr_post').css( 'cursor', 'pointer' );
    $('.tumblr_post').click(function() {
	    document.location.href='http://apache-relay-official.tumblr.com';
    });

    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  },
    test: {
    init: function() {
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
             }, 1000);
             return false;
        }
      }
       });
    });

      $.fn.extend({
        bgImg: function () {
          return this.each(function(){
            $imgBoxCont = $(this)
            $img = $('img:first',$imgBoxCont);
              if ($imgBoxCont.css('background-image').indexOf(encodeURI($img.attr('src'))) === -1) {
              // Change
              $imgBoxCont.css({'background-image': 'url("' + encodeURI($img.attr('src')) + '")'});
            }
            if (!$img.length) {console.log('No image found');} 
          });
        }
      });
      $('.bg-img').bgImg();
   
//Begin Parallax
  var $window = $(window);
  var $firstBG = $('.music-bg');
  var $secondBG = $('.tour-bg');
  var $thirdBG = $('.blog-home-bg');
  var $fourthBG = $('.gallery-home-bg');
  var $fifthBG = $('.store-bg');
  
  var windowHeight = $window.height(); //get the height of the window
    
  //apply the class "inview" to a section that is in the viewport
  $('.music-bg, .tour-bg, .blog-home-bg, .gallery-home-bg, .store-bg').bind('inview', function (event, visible) {
      if (visible == true) {
        $(this).addClass("inview");
      } else {
        $(this).removeClass("inview");
      }
    });
  
  //function that is called for every pixel the user scrolls. Determines the position of the background
  /*arguments: 
    x = horizontal position of background
    windowHeight = height of the viewport
    pos = position of the scrollbar
    adjuster = adjust the position of the background
    inertia = how fast the background moves in relation to scrolling
  */
  function newPos(x, windowHeight, pos, adjuster, inertia){
    return x + "% " + (-((windowHeight + pos) - adjuster) * inertia)  + "px";
  }
  
  //function to be called whenever the window is scrolled or resized
  function Move(){ 
    var pos = $window.scrollTop(); //position of the scrollbar


    //if the first section is in view...
    if($firstBG.hasClass("inview")){
      //call the newPos function and change the background position
      $firstBG.css({'backgroundPosition': newPos(20, windowHeight, pos, 4150, -0.4)}); 
    }
     
    //if the second section is in view...
    if($secondBG.hasClass("inview")){
      //call the newPos function and change the background position
      $secondBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 2600, -0.4)});
    }
    
    //if the third section is in view...
    if($thirdBG.hasClass("inview")){
      //call the newPos function and change the background position
      $thirdBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 2100, -0.4)});
    }
    
    //if the fourth section is in view...
    if($fourthBG.hasClass("inview")){
      //call the newPos function and change the background position
      $fourthBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 5600, -0.4)});   
    }
    
    //if the fifth section is in view...
    if($fifthBG.hasClass("inview")){
      //call the newPos function and change the background position
      $fifthBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 6600, -0.4)});
    }
    
  }
  
  enquire.register("not (max-width : 992px) and (orientation : landscape)", function() {
    console.log('enquire is firing');
        $window.resize(function(){ //if the user resizes the window...
      Move(); //move the background images in relation to the movement of the scrollbar
    });   
  
    $window.bind('scroll', function(){ //when the user is scrolling...
      Move(); //move the background images in relation to the movement of the scrollbar
    });
    // End Parallax
    }, true);

    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.