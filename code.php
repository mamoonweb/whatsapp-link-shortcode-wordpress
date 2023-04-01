<?php

function cc_post_title_shortcode($atts){
	ob_start();
	$atts = shortcode_atts(
		array(
			'number' => '1XXXXXXXXXX',
			'msg' => "I'm interested in your ",
		), $atts, 'cc_post_title_shortcode' );

	$get_number = $atts['number'];
	$get_msg =  urlencode_deep($atts['msg']);
	$whatsapp_link = "https://wa.me/".$get_number."?text=". $get_msg  . get_the_title();
    echo $whatsapp_link;
	return ob_get_clean();
}
add_shortcode('cc_post_title','cc_post_title_shortcode');


// Use Shortcode
//[cc_post_title number="1XXXXXXXXXX" msg= I'm interested in your "]

?>
