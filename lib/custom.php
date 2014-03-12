<?php
function youtube_id_from_url($atts) { 
	extract(shortcode_atts(array(
    'url' => '00000',
   ), $atts));   
    $result = preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
    return $matches[0];
}


add_shortcode('youtube_id', 'youtube_id_from_url');

?>