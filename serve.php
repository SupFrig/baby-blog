<?php

//config
$db_config = array(
	'host' => 'localhost',
	'dbname' => 'babyblog',
	'username' => 'root',
	'password' => 'root'
);
//database connect

$db = new PDO('mysql:host='.$db_config['host'].';dbname='.$db_config['host'],$db_config['username'],$db_config['password'], array( PDO::ATTR_PERSISTENT => false));

if(isset$_GET['comic']){
	$comics = $db->prepare("SELECT * FROM comics");
}else{
	$comics = $db->prepare("SELECT * FROM comics");
}

$stmt->execute();
?>