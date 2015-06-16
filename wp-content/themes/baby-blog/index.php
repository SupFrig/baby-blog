<?php
	get_header();
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
				<img class="comic" src="<?php bloginfo('template_url'); ?>/comics/1.jpg" alt="{{comics.current.title}}"/>
			</div>
			<?php get_template_part('menu-footer'); ?>
		</div>
		<?php endwhile;
		endif; 
		get_footer();
		?>