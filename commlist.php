<?php 
	require('./lib/int.php');
	$sql  = "select * from comment";
	$comms = mGetAll($sql);

	// print_r($comms);

	require(ROOT .'/view/admin/commlist.html');

 ?>