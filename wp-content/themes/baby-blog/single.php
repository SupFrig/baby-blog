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
			</div>
			<?php get_template_part('menu-footer'); ?>
		</div>
		<?php endwhile;
		endif; 
		get_footer();
		?>