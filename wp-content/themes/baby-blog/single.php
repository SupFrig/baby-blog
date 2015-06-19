<?php
	get_header();
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
		
		?>
		<div id="viewport">
			<h1 class="title">Baby Boredom</h1>
			<div class="big-baby">
				<span class="number">#<?php echo get_post_number(get_the_ID()); ?></span>
				<span class="date"><?php the_date(); ?></span>
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
						<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="white"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_white_20.png" /></a>
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
		get_footer();
		?>