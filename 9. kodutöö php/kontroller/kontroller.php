<?php
$pildid = array(
	array("source"=>"pildid/nameless1.jpeg", "alt"=>"nimetu 1"),
	array("source"=>"pildid/nameless2.jpeg", "alt"=>"nimetu 2"),
	array("source"=>"pildid/nameless3.jpeg", "alt"=>"nimetu 3"),
	array("source"=>"pildid/nameless4.jpeg", "alt"=>"nimetu 4"),
	array("source"=>"pildid/nameless5.jpeg", "alt"=>"nimetu 5"),
	array("source"=>"pildid/nameless6.jpeg", "alt"=>"nimetu 6"),
);
$page="";
if (isset($_GET['page'])){
	$page = $_GET['page'];
}
require_once('head.html');
switch($page){
	case 'galerii':
		include('galerii.html');
		break;
	case 'vote':
		include('vote.html');
		break;
	case 'tulemus':
		include('tulemus.html');
		break;
	default:
		include('pealeht.html');
}
require_once('foot.html');
?>