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
				<h1>SuperFrigo</h1>
				<strong>unwilling & unskilled</strong>
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
					<img src="img/data/dancing_alien.jpg"/>
				</a>
			</li><!--
			--><li class="item eye random">
				<a class="popin" href="#">
					<div class="mask">
						<div class="inner">
							<hr/>
						</div>
					</div>
					<img src="img/data/psyche.jpg"/>
				</a>
			</li><!--
			--><li class="item random">
				<a class="popin" href="img/data/rawr.jpg">
					<img src="img/data/rawr.jpg"/>
				</a>
			</li><!--
			--><li class="item random">
				<a class="popin" href="img/data/realbaby.png">
					<img src="img/data/realbaby.png"/>
				</a>
			</li><!--
			--><li class="item baby">
				<a class="popin" href="#">
					<img src="img/data/4.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="#">
					<img src="img/data/vrombon.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="#">
					<img src="img/data/sauterelle.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="#">
					<img src="img/data/dragonfly.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="#">
					<img src="img/data/insect_hunter.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="#">
					<img src="img/data/insect_hunter_mask_out.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="#">
					<img src="img/data/scarab.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="#">
					<img src="img/data/mobile_storage.jpg"/>
				</a>
			</li><!--
			--><li class="item insect">
				<a class="popin" href="#">
					<img src="img/data/spider.jpg"/>
				</a>
			</li><!--
			--><li class="item eye">
				<a class="popin" href="#">
					<img src="img/data/troizyeux.jpg"/>
				</a>
			</li><!--
			--><li class="item eye">
				<a class="popin" href="#">
					<img src="img/data/warp.jpg"/>
				</a>
			</li><!--
			--><li class="item baby">
				<a class="popin" href="#">
					<img src="img/data/8.jpg"/>
				</a>
			</li><!--
			--><li class="item baby">
				<a class="popin" href="#">
					<img src="img/data/9.jpg"/>
				</a>
			</li><!--
			--><li class="item baby">
				<a class="popin" href="#">
					<img src="img/data/14.jpg"/>
				</a>
			</li>
		</ul>
	</section>
	<?php $is_dev ? include('inc/scripts_dev.php') : include('inc/scripts.php'); ?>
</body>