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

function babyblog_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>">
			<div class="comment-author vcard">
				<?php echo get_avatar($comment,$size='100',$default='/img/data/default_avatar.jpg' ); ?>
				<div class="comment-meta commentmetadata">
					<div class="valign">
						<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?><br/>
						<small><?php printf(__('%1$s %2$s'), get_comment_date(),  get_comment_time()) ?></small>
					</div>
				</div>
			</div><!--
			--><div class="comment-text">
				<?php if ($comment->comment_approved == '0') : ?>
					<em class="warning"><?php _e('Your comment is awaiting moderation.') ?></em>
				<?php endif; ?>
				<?php comment_text() ?>
				<div class="reply">
					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</div>
			</div>

		</div>
<?php
}

// Add a default avatar to Settings > Discussion
if ( !function_exists('fb_addgravatar') ) {
	function fb_addgravatar( $avatar_defaults ) {
		$myavatar = get_bloginfo('template_directory') . '/img/data/default_avatar.jpg';
		$avatar_defaults[$myavatar] = 'Baby';

		return $avatar_defaults;
	}

	add_filter( 'avatar_defaults', 'fb_addgravatar' );
}

function babyblog_remove_post_author_weburl($return) {
	global $comment, $post;
	if( !is_admin() ){
		if ( $comment->user_id == $post->post_author ) {
			$author = get_comment_author( get_comment_ID() );
			$return = $author; //return post author display name only
		return $return;
		} else {
			return $return; //return default
		}
	}
}
add_filter( 'get_comment_author_link', 'babyblog_remove_post_author_weburl');