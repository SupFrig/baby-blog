<ul id="menu">
				<li><a href="/" title="Homepage"><img src="<?php bloginfo('template_url'); ?>/img/skin/btn-home.png"/></a></li>
				<li><a href="/comic/{{comics.first.number}}" title="First comic"><img src="<?php bloginfo('template_url'); ?>/img/skin/btn-first.png"/></a></li>
				<li>
					<a href="<?php echo get_previous_post_url(); ?>" title="Previous"><img src="<?php bloginfo('template_url'); ?>/img/skin/btn-prev.png"/></a>
				</li>
				<li><a href="#" title="Random"><img src="<?php bloginfo('template_url'); ?>/img/skin/btn-random.png"/></a></li>
				<li>
					<a href="<?php echo get_next_post_url(); ?>" title="Next"><img src="<?php bloginfo('template_url'); ?>/img/skin/btn-next.png"/></a>
				</li>
				<li><a href="/comic/{{comics.last.number}}" title="Last"><img src="<?php bloginfo('template_url'); ?>/img/skin/btn-last.png"/></a></li>
			</ul>