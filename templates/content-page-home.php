<?php while (have_posts()) : the_post(); ?>
  <!--before content-->
  <?php the_content(); ?>
  
  <?php 
  $video = do_shortcode('[wpv-view name="background-video"]');
  $vidID = function youtube_id_from_url($video);
  
  echo $vidID;
  echo "poop";
  ?>
  <script type="text/javascript">
            $(document).ready(function(){
            	$videoURL= <?php echo $vidID?>
    $('.video-content').tubular({videoId: '$videoURL',
            			repeat: true,
            		wrapperZIndex: -10000
            				});
            			});
          </script>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>