<?php
/*
Template Name: Tumblr Template
*/
?>
<?php
  $request_url = 'http://apache-relay-official.tumblr.com/api/read?start=0&num=1';
  $xml = simplexml_load_file($request_url);
  $title = $xml->posts->post->{'regular-title'};
  $link = $xml->posts->post[‘url’];
  echo 'Latest blog entry: <a href="'.$link.'">'.$title.'</a>';
?>
<p class="blog_title"><?php include('includes/latest_blog.php'); ?></p>