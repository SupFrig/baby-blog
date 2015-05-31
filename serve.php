<?php
/*
	return a json object for angular application with the first, previous, current, next & last comic.
*/

//config
require_once('config/config.php');

$return = array(
	'first' => '',
	'previous' => '',
	'current' => '',
	'next' => '',
	'last' => '',
);

//database connect
$db = new PDO('mysql:host='.$db_config['host'].';dbname='.$db_config['dbname'],$db_config['username'],$db_config['password'], array( PDO::ATTR_PERSISTENT => false));

$comics = $db->prepare("SELECT * FROM comics ORDER BY number DESC");
$comics->execute();

$result = $comics->fetchAll();
$count = $comics->rowCount();
	
$return['last'] = $result[0];
$return['first'] = $result[$count-1];
if(isset($_GET['comic'])){
	$current = $db->prepare("SELECT * FROM comics WHERE number = :number");
	$current->bindValue(':number',$_GET['comic'], PDO::PARAM_INT);
	$current->execute();
	
	$return['current'] = $current->fetch();
	
	$prev = $db->prepare("SELECT * FROM comics WHERE number = :number");
	$prev->bindValue(':number',($_GET['comic']-1), PDO::PARAM_INT);
	$prev->execute();
	
	if($prev->rowCount() > 0){
		$return['previous'] = $prev->fetch();
	}
	
	$next = $db->prepare("SELECT * FROM comics WHERE number = :number");
	$next->bindValue(':number',$_GET['comic']+1, PDO::PARAM_INT);
	$next->execute();
	
	if($next->rowCount() > 0){
		$return['next'] = $next->fetch();
	}
}else{
	$return['current'] = $result[0];
	$return['previous'] = $result[1];
}
	
echo json_encode($return);

?>