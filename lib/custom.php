<?php
function youtube_id_from_url($atts) { 
	extract(shortcode_atts(array(
    'url' => '00000',
   ), $atts));   
    $result = preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
    return $matches[0];
}
add_shortcode('youtube_id', 'youtube_id_from_url');


define( 'UPLOADS', ''.'assets' );

function bread_crumbs ($atts) {

   extract(shortcode_atts(array(
    'width' => '100%',
   ), $atts));
return yoast_breadcrumb('<div class="breadcrumbs">','</div>');
}

add_shortcode('breadcrumbs', 'bread_crumbs');


add_action( 'plugins_loaded', 'my_cleanup', 12 ); // after they are registered
function my_cleanup() {
if ( !is_admin() ) {
global $WP_Views;
remove_action('wp_print_styles', array($WP_Views, 'add_render_css'));
remove_action('wp_head', 'wpv_add_front_end_js');
remove_action('wp_footer', 'wpcf_access_dependencies_render_js');
wp_dequeue_style( 'views-pagination-style' );
wp_dequeue_script( 'views-pagination-script' );
wp_dequeue_script( 'wpv-date-front-end-script' );
wp_dequeue_script( 'jquery-ui-datepicker' );
wp_dequeue_script( 'jquery-ui-core' );
wp_dequeue_style( 'jquery-ui-datepicker' );
}
}


?>