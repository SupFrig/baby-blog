<?php
	/* 
	REMINDER
		Uploader les BD dans comics/ au format .jpg en les nommant selon la numérotation
		la nav sera pétée si la numérotation des jpg ne suit pas
		
	TODO
		bouton random
	*/
	
	//global configs
	$is_dev = true;
	$base_url = 'http://' . $_SERVER['SERVER_NAME'] . '/';
	
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include('inc/head'.(($is_dev)?'.dev':'').'.php'); ?>
		<base href="<?php echo $base_url; ?>">
	</head>
	<body>
		<div style="display:none">
			<?php var_dump($_SERVER); ?>
		</div>
		<div id="viewport" ng-app="babyblog">
			<h1 class="title">Baby Oredom</h1>
			<div ng-view=""></div>
			<ul id="footer">
				<li><a href="#">about</a></li>
				<li> - </li>
				<li><a href="#">archives</a></li>
				<li> - </li>
				<li><a href="#">contact</a></li>
			</ul>
		</div>
		<div id="viewport-bottom"></div>
		<?php include('inc/scripts'.(($is_dev)?'.dev':'').'.php'); ?>
	</body>
</html>