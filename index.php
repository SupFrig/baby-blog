<?php
	/* 
	TODO
		bouton random
	*/
	
	//global configs
	$is_dev = false;
	$base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/';
	
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include('inc/head'.(($is_dev)?'.dev':'').'.php'); ?>
		<base href="<?php echo $base_url; ?>">
	</head>
	<body>
		<div id="viewport" ng-app="babyblog">
			<h1 class="title">Baby Oredom</h1>
			<div ng-view=""></div>
			<ul id="footer">
				<!--<li><a href="#">about</a></li>
				<li> - </li>
				<li><a href="#">archives</a></li>
				<li> - </li>-->
				<li><a href="mailto:baby.boredom@gmail.com">contact</a></li>
			</ul>
		</div>
		<div id="viewport-bottom"></div>
		<?php include('inc/scripts'.(($is_dev)?'.dev':'').'.php'); ?>
	</body>
</html>