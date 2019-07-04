<?php
/*<br>
Plugin Name: AMP Custom Plugin<br>
Plugin URI: https://wordpress.org/plugins/accelerated-mobile-pages/<br>
Description: a plugin to create ampcustomplugin and spread joy<br>
Version: 1.0<br>
Author:  Chunhong Lin<br>
*/
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('ampforwp_after_header','amp_custom_post_carousel');
function amp_custom_post_carousel() { ?>
<?php
$args = array(
	'numberposts' => 8,         /*number of posts in the carousel*/
	'offset' => 0,
	'category' => 0,
	'orderby' => 'post_date',       /*show the latest post*/
	'order' => 'DESC',
	'include' => '',
	'exclude' => '',
	'meta_key' => '',
	'meta_value' =>'',
	'post_type' => 'post', 
	'post_status' => 'publish',
	'suppress_filters' => true
); 
$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>

<div id="hightlight-content">
    <div class="scrollmenu">
              <?php
        	foreach( $recent_posts as $recent ){
        	    
        	        echo '<div class="carousel-post-wrapper"> 
        	         <div class="carousel-content-wrapper"><a href="' . get_permalink($recent["ID"]) . '">' . get_the_post_thumbnail( $recent["ID"], 'post-thumbnail'). '</a></div>
        	        <div class="carousel-content-wrapper wrapper-a"><a href="' . get_permalink($recent["ID"]) . '">'. $recent["post_title"].'</a></div></div>';
        	         
        	}
        	wp_reset_query();
        ?>
    </div>
</div>

<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("hightlight-content").style.top = "50px";
  } else {
    document.getElementById("hightlight-content").style.top = "-190px";
  }
  prevScrollpos = currentScrollPos;
}
</script>





	<?php 
} 

