<?php
function youtube_id_from_url($url) {    
    $result = preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
    if (false !== $result) {
        return $matches[1];
    }
    return $matches[1];
}



?>