<?php
/*<br>
Plugin Name: AMP Recent Post Carousel<br>
Plugin URI:  <br>
Description: A plugin to create a recent post carousel<br>
Version: 1.0<br>
Author:  Chunny<br>
*/
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

//get the post and data
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
        	    $lalala = get_the_post_thumbnail_url( $recent["ID"], 'post-thumbnail');
        	      
        	        echo '<div class="carousel-post-wrapper"> 
        	        <div class="carousel-content-wrapper"><a href="' . get_permalink($recent["ID"]) . '"> <amp-img src=" '.$lalala.' " alt=" " height="90" width="110"></amp-img> </a></div>
        	        <div class="carousel-content-wrapper wrapper-a"><a href="' . get_permalink($recent["ID"]) . '">'. $recent["post_title"].'</a></div></div>';
        	}
        	wp_reset_query();
        ?>
    </div>
</div>

<script type="text/plain" target="amp-script" id="script">
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


add_action('amp_post_template_css', 'amp_custom_post_carousel_styling');
function amp_custom_post_carousel_styling() { ?>

#hightlight-content {
  z-index:200;
  position: fixed;
  top: 50px;  
  width: 100%;
  display: block;
  transition: top 0.3s;
  height: auto;
  white-space: nowrap;
  overflow: hidden;
} 
.scrollmenu {
  background-color: #232727;
  overflow: auto;
	height:100%;
  white-space: nowrap;
}
.carousel-content-wrapper a:hover {
	color:#d12662;
}

.carousel-post-wrapper{
	display: inline-block;
	margin:0 20px 0 0 ;
	width:310px;
}
.carousel-content-wrapper img{
	 
	margin:0 5px;
	border-radius:3px;
	float: left;
  clear: none; 
}
.carousel-content-wrapper{
	white-space: pre-wrap;       
	white-space: -moz-pre-wrap;  
	white-space: -o-pre-wrap;    
	word-wrap: break-word;       
	display:inline-block;
	margin:5px 0;
	vertical-align:middle;
	 
}

.carousel-content-wrapper a {
	color:#fff;
	font-weight:600;
	word-break:break-all;
	transition:all 0.3s ease-in-out 0s;
}
.wrapper-a {
	width:200px;} 

::-webkit-scrollbar { width: 0px; /* Remove scrollbar space */ 
	background: transparent; /* Optional: just make scrollbar invisible */ }

<?php }


























