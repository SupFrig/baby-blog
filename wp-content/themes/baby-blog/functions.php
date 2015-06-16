<?php

function init() {

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	add_image_size('comic',980,'auto',false);
}
add_action( 'after_setup_theme', 'init' );

function get_post_number($postID){
	$temp_query = $wp_query;
	$postNumberQuery = new WP_Query('orderby=date&order=ASC&posts_per_page=-1');
	$counter = 1;
	$postCount = 0;
	if($postNumberQuery->have_posts()) :
		while ($postNumberQuery->have_posts()) : $postNumberQuery->the_post();
			if ($postID == get_the_ID()){
				$postCount = $counter;
			} else {
				$counter++;
			}
	endwhile;
	endif;
	wp_reset_query();
	$wp_query = $temp_query;
	return $postCount;
}

function get_previous_post_url(){
	$post = get_previous_post();
	return get_permalink($post->ID);
}

function get_next_post_url(){
	$return = '';
	if(!is_home()){
		$post = get_next_post();
		$return =  get_permalink($post->ID);
	}
	return $return;
}