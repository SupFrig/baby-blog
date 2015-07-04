<?php
	//hotfix to redirect to last post
	require('./wp-blog-header.php');
	if (have_posts()) : the_post();
		header("location: ".get_permalink());
		exit;
	endif;
	/*get_header();
	query_posts('showposts=1');
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>
		<div id="viewport">
			<h1 class="title">Baby Boredom</h1>
			<div class="big-baby">
				<span class="number">#1</span>
				<span class="date">12/12/2012</span>
			</div>
			<?php get_template_part('menu'); ?> 
			<div id="content">
				<?php the_post_thumbnail('comic'); ?>
				<ul class="shares">
					<li>
						<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button"></div>
					</li>
					<li>
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
					</li>
					<li>
						<div class="g-plus" data-action="share" data-annotation="none"></div>
					</li>
					<li>
						<a href="//www.pinterest.com/pin/create/button/?url=<?php echo urlencode(get_the_permalink()) ?>&amp;media=<?php the_post_thumbnail('full'); ?>" data-pin-do="buttonBookmark"  data-pin-color="white"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_white_20.png" /></a>
					</li>
				</ul>
				<?php if ( comments_open() || get_comments_number() ) {
					comments_template();
				} ?>
			</div>
			<?php get_template_part('menu-footer'); ?>
		</div>
		<?php endwhile;
		endif; 
		get_footer();*/
		?>