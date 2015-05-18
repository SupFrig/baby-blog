<?php
//comic display
$comics = glob('comics/*.*');
$comic_date = 0;
$comic = '';
$comic_number = 666;
$prev = '';
$next = '';
$first = '';
$last = '';

//loop through ALL comics
foreach($comics as $key => $file) {
	//first comic
	if($key === 0){
		$first_number = intval(str_replace('comics/','',$file));
		$first = array(
			'number' => $first_number,
			'date' => filemtime($file),
			'url' => $file
		);
	}
	//last comic
	if($key === (count($comics) - 1)){
		$last_number = intval(str_replace('comics/','',$file));
		$last = array(
			'number' => $last_number,
			'date' => filemtime($file),
			'url' => $file
		);
	}
	
	//last edited file
	$mtime = filemtime($file);
	if($mtime > $comic_date){
		$comic_date = $mtime;
		$comic = $file;
		$comic_number = intval(str_replace('comics/','',$comic));
	}
	
}

//get URI param
if(isset($_GET['comic']) && !empty($_GET['comic'])){
	if(is_file('comics/'.$_GET['comic'].'.jpg')){
		//file exists, yay !
		$comic = 'comics/'.$_GET['comic'].'.jpg';
		$comic_date = filemtime($comic);
		$comic_number = intval(str_replace('comics/','',$comic));
	}else{
		//file does not exists, redirect to home
		header('Location: '.$base_url);
	}
}

//prev/next files
if(is_file('comics/'.((int)$comic_number+1).'.jpg')){
	$next_number = (int)$comic_number+1;
	$next = array(
		'number' => $next_number,
		'date' => filemtime('comics/'.$next_number.'.jpg'),
		'url' => 'comics/'.$next_number.'.jpg'
	);
	
}
if(is_file('comics/'.((int)$comic_number-1).'.jpg')){
	$prev_number = (int)$comic_number-1;
	$prev = array(
		'number' => $prev_number,
		'date' => filemtime('comics/'.$prev_number.'.jpg'),
		'url' => 'comics/'.$prev_number.'.jpg'
	);
}

//prepare response
$response = array(
	'current' => array(
		'number' => $comic_number,
		'date' => $comic_date,
		'url' => $comic
	),
	'previous' => $prev,
	'next' => $next,
	'first' => $first,
	'last' => $last
);

echo json_encode($response);
?>