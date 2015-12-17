<?php include('config.php'); ?>
<!doctype html>
<!--[if lte IE 7]> <html class="ie7" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="ie8" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="fr"> <![endif]-->
<html lang="fr">
<?php $is_dev ? include('inc/head_dev.php') : include('inc/head.php'); ?>
<body>
    <header>
		<div class="valign">
			<div class="logo">
				<h1>Tiens,</h1>
				<strong>voilà un dessin</strong>
			</div><!--
				--><nav class="menu">
				<ul>
					<li><a class="popin" href="#">Porfolio</a></li>
					<li><a class="popin" href="#">About me</a></li>
					<li><a class="popin" href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
		<nav class="filters">
			<ul>
				<li><a href="#" data-filter=".insect">Insectes</a></li>
				<li><a href="#" data-filter=".eye">Zyeux</a></li>
				<li><a href="#" data-filter=".baby">Baby</a></li>
				<li><a href="#" data-filter=".random">Random</a></li>
			</ul>
		</nav>
	</header>
	<section class="projects">
		<ul>
			<li class="grid-sizer"></li>
			<li class="item eye">
				<a class="popin" href="#">
					<img src="img/thumbs/dancing_alien.jpg"/>
				</a>
			</li><!--
			--><li class="item eye random">
				<a class="popin" href="img/data/psyche.jpg">
					<img src="img/thumbs/psyche.jpg"/>
				</a>
			</li><!--
			--><li class="item random">
				<a class="popin" href="img/data/rawr.jpg">
					<img src="img/thumbs/rawr.jpg"/>
				</a>
			</li><!--
			--><li class="item random">
				<a class="popin" href="img/data/realbaby.png">
					<img src="img/thumbs/realbaby.png"/>
				</a>
			</li><!--
			--><li class="item baby">
				<a class="popin" href="img/data/4.jpg">
					<img src="img/thumbs/4.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="img/data/vrombon.jpg">
					<img src="img/thumbs/vrombon.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="img/data/sauterelle.jpg">
					<img src="img/thumbs/sauterelle.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="img/data/dragonfly.jpg">
					<img src="img/thumbs/dragonfly.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="img/data/insect_hunter.jpg">
					<img src="img/thumbs/insect_hunter.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="img/data/insect_hunter_mask_out.jpg">
					<img src="img/thumbs/insect_hunter_mask_out.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="img/data/scarab.jpg">
					<img src="img/thumbs/scarab.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="img/data/mobile_storage.jpg">
					<img src="img/thumbs/mobile_storage.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="img/data/spider.jpg">
					<img src="img/thumbs/spider.jpg"/>
				</a>
			</li><!--
			--><li class="item eye">
				<a class="popin" href="img/data/troizyeux.jpg">
					<img src="img/thumbs/troizyeux.jpg"/>
				</a>
			</li><!--
			--><li class="item eye">
				<a class="popin" href="img/data/warp.jpg">
					<img src="img/thumbs/warp.jpg"/>
				</a>
			</li><!--
			--><li class="item baby">
				<a class="popin" href="img/data/8.jpg">
					<img src="img/thumbs/8.jpg"/>
				</a>
			</li><!--
			--><li class="item baby">
				<a class="popin" href="img/data/9.jpg">
					<img src="img/thumbs/9.jpg"/>
				</a>
			</li><!--
			--><li class="item baby">
				<a class="popin" href="img/data/14.jpg">
					<img src="img/thumbs/14.jpg"/>
				</a>
			</li>
		</ul>
	</section>
	<?php $is_dev ? include('inc/scripts_dev.php') : include('inc/scripts.php'); ?>
</body>