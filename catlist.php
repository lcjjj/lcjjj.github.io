<meta charset="utf8">
<?php 

	$link = @mysql_connect('localhost','root','');
			mysql_query('use blog',$link);
			mysql_query('set names utf8');

	$sql = "select * from cat";
	$rs = mysql_query($sql);
	//var_dump(mysql_fetch_assoc($rs));
	$cat = array();
	while($row = mysql_fetch_assoc($rs)){
		$cat[] = $row;
	}
	//print_r($cat);

	require('./view/admin/catlist.html');



 ?>