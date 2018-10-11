<?php 
	/*echo __DIR__, '</br>';
	echo __FILE__, '</br>';
	echo __LINE__ ,'</br>';*/

	header('content-type:text/html;charset=utf8');
	define('ROOT',dirname(__DIR__));
	//echo ROOT;

	require(ROOT . '/lib/mysql.php');
	require(ROOT . '/lib/fun.php');

	$_GET = _addslashes($_GET);
	$_POST = _addslashes($_POST);
	$_COOKIE = _addslashes($_COOKIE);



 ?>